<?php


namespace observer\observ;

use observer\entity;
use SplSubject;

class Applicant implements \SplObserver
{
    protected /*string*/ $name;
    protected /*string*/ $email;
    protected /*float*/ $experience;

    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function update(\SplSubject $subject)
    {
        echo "Отправляем письмо на адрес {$this->email}";
        echo "Уважаемый {$this->name} в компании {$subject->company}
        открылась вакансия на интересующую вас должность {$subject->vacancy}";

    }
}