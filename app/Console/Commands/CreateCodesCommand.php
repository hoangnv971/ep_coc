<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Code;
use Barryvdh\DomPDF\Facade\Pdf;

class CreateCodesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:qrcode {--so-luong=} {--thep-chu=} {--coc=} {--mac-be-tong=} {--so-lo=}';


    protected $description = 'Create QR code command!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {


        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $listCodes = [];
        $options = $this->options();
        $dateFomated = date('mY', time());
        $data = [];
        $data['phone'] = '0968846686';
        $data['coc'] = $options['coc'] ?? '';
        $data['thep_chu'] = $options['thep-chu'] ?? '';
        $data['mac_be_tong'] = $options['mac-be-tong'] ?? '';
        $total = $options['so-luong'] ?? 0;
        $data['so_lo'] = $options['so-lo'] ?? $dateFomated;
        $logoPath = public_path('/images/logo.jpg');
        for($i = 1; $i <= $total; $i++)
        {
            $data['serial'] = rand(1000,9999).substr(time(), 4, -1).rand(1000,9999);
            $code = Code::create($data);
            $codeMaxId = Code::where('so_lo', $data['so_lo'])->whereNotNull('code_id')->orderBy('id', 'desc')->first();
            // $maxId = (int) str_replace($data['so_lo'].' - ', '', $codeMaxId->code_id ?? 0);
            $code_id = $dateFomated.' - '. sprintf("%05d", $codeMaxId->id);
            $code->update(['code_id' => $code_id]);
            $listCodes[] = $code;
            $this->info($i.'.'.($code->code_id ?? '').' created!');
        }
        if($total >=1){
            $fileName = 'files/'.$dateFomated.substr(time(), 4, -1).'.pdf';
            $this->info('Exporting pdf file');
            Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            $this->info('...');
            Pdf::loadView('export_pdf', compact('listCodes', 'logoPath'))->setPaper('A4')->save($fileName, 'local');
            $this->info(config('app.url').'/'.$fileName);
            $this->info('End!');
        }else{
            $this->info('');
            $this->info('php artisan create:qrcode --so-luong='.($total ?? '00').' --thep-chu='.$data['thep_chu'].' --coc='.$data['coc'].' --mac-be-tong='.$data['mac_be_tong']);
            $this->info('');
        }

        return 0;
    }
}
