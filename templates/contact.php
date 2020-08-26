<?php
$errors=[];
?>
<!--partie contact avec formulaire-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Content-->
                <div class="row justify-content-center">
                    <form method="post" action="../public/index.php#contact">
                        <div class="row">
                            <div class="col">
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Prénom"
                                       value="<?= isset($post) ? htmlspecialchars($post->get('firstname')): ''; ?>"><br>
                                <?= isset($errors['firstname']) ? $errors['firstname'] : ''; ?>
                            </div>
                            <div class="col">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Nom"
                                       value="<?= isset($post) ? htmlspecialchars($post->get('lastname')): ''; ?>"><br>
                                <?= isset($errors['lastname']) ? $errors['lastname'] : ''; ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email" class="form-control" id="inputEmail3"
                                       value="<?= isset($post) ? htmlspecialchars($post->get('email')): ''; ?>"><br>
                                <?= isset($errors['email']) ? $errors['email'] : ''; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-form-label">Message</label>
                            <div class="col-sm-10">
                                <textarea type="email" id="message" name="message" class="form-control" id="inputEmail3"><?= isset($post) ? htmlspecialchars($post->get('message')): ''; ?></textarea><br>
                                <?= isset($errors['message']) ? $errors['message'] : ''; ?>

                            </div>
                            <button class="btn btn-primary" type="submit">Envoyez</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </section>


<?php
var_dump($_POST);
var_dump($errors);
var_dump($_SESSION);
/*
if (!empty($errors)){
    $_SESSION['errors']= $errors;
    header('Location: ../public/index.php#contact');
}else {
    $message = $_POST['message'];
    $headers = 'FROM: site@local.dev';
    mail('contact@local.dev', 'Formulaire de contact', $message, $headers);
}
var_dump($_POST);
var_dump($errors);
var_dump($_SESSION);




if (empty($errors)){
    $message = $_POST['message'];
    $headers = 'FROM: site@local.dev';
    mail('contact@local.dev', 'Formulaire de contact', $message, $headers);
}else{
    echo $errors;
    header('Location: ../public/index.php#contact');
}

var_dump($_POST);
var_dump($errors);
var_dump($_SESSION);
?>
*/