<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\emailmarketinggmail;

class emailmarketingjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $emaildata, $templateid, $subjectData, $user_name;
    // protected $recipientEmail, $templateid, $subjectData, $user_name;
    /**
     * Create a new job instance.
     */
    public function __construct($emaildata, $id, $subjectData)
    {
        $this->subjectData = $subjectData;
        $this->emaildata = $emaildata;
        // $this->$user_name = $user_name;
        $this->templateid = $id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $templateData = template::find($this->templateid);
        // dd($this->user_name);
        // Mail::to($this->emaildata['email'])->send(new emailmarketinggmail($templateData, $this->emaildata['name'], $this->subjectData));
        Mail::to($this->emaildata['email'])->later(now()->addMinutes(10), new emailmarketinggmail($templateData, $this->emaildata['name'], $this->subjectData));
    }

}
