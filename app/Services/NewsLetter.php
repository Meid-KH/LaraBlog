<?php

namespace App\Services;

class NewsLetter
{
  public function subscribe($email, $list) {
    $list ??= config("services.mailchimp.newsletterList");
    return $this->client()->lists->addListMember($list, [
        "email_address" => $email,
        "status" => "subscribed",
    ]); 
  }
  protected function client() {
    $mailchimp = new \MailchimpMarketing\ApiClient();
    $mailchimp->setConfig([
        'apiKey' => config("services.mailchimp.key"),
        'server' => config("services.mailchimp.server")
    ]);
    return $mailchimp;
  }
}