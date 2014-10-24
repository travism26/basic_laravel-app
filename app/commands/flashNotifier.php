<?php
namespace Acme\Notifications;

use Illuminate\Session\Store;

class flashNotifier {

    /**
     * @var Store
     */
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function overlay($message)
    {
        $this->message($message);
        $this->session->flash('flash_notification.overlay', true);
    }

    public function println($message)
    {
        echo "hello";
    }
} 