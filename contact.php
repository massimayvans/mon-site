<!DOCTYPE html>
<html lang="en">
<?php include('entete.php')?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Contactez Nous
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="index.php">Acceuil</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="service.php">Services</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Contact
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
              <div class="col-sm-6">
                <img class="img-fluid" src="img/logo123.png" id="" alt="" />
              </div>
              <div class="col-sm-6">
                <h3 class="mb-0">Nom du site</h3>
                <p>wwww.massima-yvan-protech.com</p>
                <h6>Date de création</h6>
                <p>
                  Mise en service le 26 Novembre 2022.
                </p>
                <p class="mb-0">Call: +221 76 597 69 70</p>
                <p class="mb-0">Email: massimaonel@live.com</p><br>
                <h6>Zone géographique d'intervention</h6>
                <p>
                  Dakar, Sénégal | Libreville/Port-Gentil, Gabon.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
              <div class="col-sm-6">
                <img class="img-fluid" src="img/Yagami.png" id="" alt="" />
              </div>
              <div class="col-sm-6">
                <h3 class="mb-0">Massima Yvan Onel</h3>
                <p>Administrateur principal du site</p>
                <h6>Contact & Details</h6>
                <p>
                  Vous pouvez me joindre via les informations ci-après.
                </p>
                <p class="mb-0">Tel: +221 77 337 81 47</p>
                <p class="mb-0">Email: massimaonel@gmail.com</p><br>
                <h6>Curriculum vitae</h6>
                <p class="mb-0">Cliquer ici pour téléchager le Cv .(pdf) </p><br>
                <a href="img/Profefessionel-CV-MY.pdf">Télécharger maintenant <i class="bi bi-file-text"></i></a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 450px"
          >
            <div class="position-relative h-100">
              <iframe
                class="position-relative w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.5071842607595!2d-17.457680784960125!3d14.740431989713592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d90b38fa11f%3A0xac59b6e97288d7d6!2sEcode%20Afrique!5e0!3m2!1sfr!2ssn!4v1669391265430!5m2!1sfr!2ssn"
                frameborder="0"
                style="min-height: 450px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Contact Sn</h6>
              <h1 class="display-6 mb-0">
                Si vous avez des questions, veuillez nous contacter
              </h1>
            </div>
            <p class="mb-4">
              Afin de répondre au mieux à vos préoccupation,
              vous pouvez me laisser un mail à mon adresse
              électronique personnel. Je vous donnerai suite
              dans les plus brefs délais.
            </p>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="name">Votre Nom</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control border-0 bg-light"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Votre Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      id="subject"
                      placeholder="Subject"
                    />
                    <label for="subject">Objet</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control border-0 bg-light"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 150px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    Envoyé
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
<?php include('footer.php')?>
  </body>
</html>
