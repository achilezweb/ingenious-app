<?php

namespace App\Console\Commands;

use App\Mail\ExampleMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReportEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send-report-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a report email to the admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $details = [
            'title' => 'Daily Report',
            'body' => 'This is your daily report.'
        ];

        $customSubject = 'Report email sent to Queue ' . date("F j, Y, g:i a");
        Mail::to('achilez@gmail.com')->queue(new ExampleMail($details, $customSubject));
        $this->info('Report email sent successfully!');
    }
}
