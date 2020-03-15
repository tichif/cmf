@extends('front.layout.app')

@section('content')
    <!--CONTACT SECTION-->
  <section id="contact-section" class="my-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase">Contactez-nous</h3>
          <br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <form action="" id="contact-form">
            <div class="row">
              <div class="col-md-6">
                  <label for="firstname">Prénom <span class="blue">*</span></label>
                  <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                  <p class="comments">Ceci est un commentaire</p>
              </div>
              <div class="col-md-6">
                  <label for="name">Nom <span class="blue">*</span></label>
                  <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                  <p class="comments">Ceci est un commentaire</p>
              </div>
              <div class="col-md-6">
                  <label for="mail">Email <span class="blue">*</span></label>
                  <input id="mail" type="email" name="mail" class="form-control" placeholder="Votre email">
                  <p class="comments">Ceci est un commentaire</p>
              </div>
              <div class="col-md-6">
                  <label for="phone">Téléphone</label>
                  <input id="phone" type="text" name="phone" class="form-control" placeholder="Votre numéro de téléphone">
                  <p class="comments">Ceci est un commentaire</p>
              </div>
              <div class="col-md-12">
                  <label for="message">Message <span class="blue">*</span></label>
                  <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                  <p class="comments">Ceci est un commentaire</p>
              </div>
              <div class="col-md-12">
                  <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                  <p class="alert alert-success">Votre message a été envoyé. Merci de nous avoir contacté.</p>
              </div>
              <div class="col-md-6">
                <button class="btn btn-success btn-lg" type="submit">Valider</button>
                <button class="btn btn-danger btn-lg" type="reset">Annuler</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection