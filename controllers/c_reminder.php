<?php
class reminder_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("Members only. <a href='/users/login'>Login</a>");
        }
    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_reminder_add');
        $this->template->title   = "New Reminder";

        # Render template
        echo $this->template;

    }

    public function p_add() {
         $q = "SELECT email 
        FROM users";

    $token = DB::instance(DB_NAME)->select_field($q);

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;
        $email = $this->user->email;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('reminders', $_POST);

        # Quick and dirty feedback
        echo "Your reminder has been sent. <a href='/reminder/add'>Add another</a>";
        // Router::redirect("/reminder");


    $to[]    = Array("name" => APP_NAME, "email" => SYSTEM_EMAIL);
    $from    = Array("name" => APP_NAME, "email" => APP_EMAIL);
    $subject = "Remind.me Reminder";

        
    $body = View::instance('v_email_template');
        
    # Send email
    Email::send($to, $from, $subject, $body, true, '');
    

    }

    public function index() {

    # Set up the View
    $this->template->content = View::instance('v_reminder_index');
    $this->template->title   = "Reminders";

    # Build the query
    $q = "SELECT 
    reminders .* , 
    users.first_name, 
    users.last_name
    FROM reminders
    INNER JOIN users 
    ON reminders.user_id = users.user_id
    WHERE reminders.user_id = ".$this->user->user_id;

    # Run the query
    $reminders = DB::instance(DB_NAME)->select_rows($q);

    # Pass data to the View
    $this->template->content->reminders = $reminders;

    # Render the View
    echo $this->template;

}
    
}