<?php
class hello {
    const hello_poeple =  "Thanks for visiting my village";
    public function Peoples() {
        echo hello::hello_poeple;
    }
}
$Hello = new hello();
$Hello->Peoples();
?>