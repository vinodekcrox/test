<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: User_Authentication/");
}

?>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Empty Page <small>Create new page.</small>
                        </h1>
                    </div>
                </div> 