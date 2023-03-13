<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css%22%3E%22%3E"
    />
    <title>Document</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="container">
          <div class="bg-light p-4 w-100">
            <div class="row">
              <div class="col-2">
                <h5 class="fw-bold">
                  <span class="bg-primary text-white rounded">JOHN</span> DOE
                </h5>
              </div>
              <div class="col-5"></div>
              <div class="col-5">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="#">Qui suis je?</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="#expertise"
                      >Expertises</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="#portfolio"
                      >Portfolio</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="#contact"
                      >Contact</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="p-5">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="fw-bold">
                Je suis John Doe Développeur et Designer Web
              </h1>
              <h2>Bienvenue dans mon univers créatif</h2>
              <button class="btn btn-primary">Mon expertise Web</button>
            </div>
            <div class="col">
              <img src="image1.png" alt="John Doe" width="100%" />
            </div>
          </div>
        </div>
      </section>
      <section id="expertise" class= p-5 bg-light">
      <div class="container">
        <h2 class="fw-bold">Mon expertise</h2>
        <h3>Développement web et design</h3>

        <!-- Developpement -->
        <div class="row mt-5">
          <div class="col-7">
            <div class="row align-items-center bg-white my-4">
              <div class="col-1"><i class="fab fa-html5"></i></div>
              <div class="col-2"><h5 class="fw-bold">HTML</h5></div>
              <div class="col-9 progress my-2">
                <div
                  class="progress-bar w-50"
                  role="progressbar"
                  style="width: 50%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="row bg-white my-4">
              <div class="col-1"><i class="fa-brands fa-css3-alt"></i></div>
              <div class="col-2"><h5 class="fw-bold">CSS</h5></div>
              <div class="col-9 progress my-2">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 25%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="row bg-white my-2">
              <div class="col-1"><i class="fa-brands fa-square-js"></i></div>
              <div class="col-2"><h5 class="fw-bold">JS</h5></div>
              <div class="col-9 progress my-3">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 25%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="row bg-white my-2">
              <div class="col-1"><i class="fa-brands fa-php"></i></div>
              <div class="col-2"><h5 class="fw-bold">PHP</h5></div>
              <div class="col-9 progress my-3">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 25%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="row bg-white my-2">
              <div class="col-1"><i class="fa-brands fa-sass"></i></div>
              <div class="col-2"><h5 class="fw-bold">SAAS</h5></div>
              <div class="col-9 progress my-3">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 25%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
          <div class="offset-1 col-4">
            <img
              src="image2.png"
              alt="écran montrant du code php"
              width="100%"
            />
          </div>
        </div>

        <!-- Design -->
        <div class="row mt-5">
          <div class="col-4">
            <img
              src="image3.png"
              alt="écran montrant des designs"
              width="100%"
            />
          </div>
          <div class="offset-1 col-7">
            <div class="row bg-white my-4">
              <div class="col-1"><i class="fa-brands fa-figma"></i></div>
              <div class="col-2"><h5 class="fw-bold">Figma</h5></div>
              <div class="col-9 progress my-3">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 50%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="row bg-white my-4">
              <div class="col-1">icon</div>
              <div class="col-2"><h5 class="fw-bold">Suite Adobe</h5></div>
              <div class="col-9 progress my-3">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 50%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="row bg-white my-4">
              <div class="col-1">icon</div>
              <div class="col-2"><h5 class="fw-bold">Design UI</h5></div>
              <div class="col-9 progress my-3">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 50%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="row bg-white my-4">
              <div class="col-1">icon</div>
              <div class="col-2"><h5 class="fw-bold">Design UX</h5></div>
              <div class="col-9 progress my-3">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 50%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="row bg-white my-4">
              <div class="col-1"><i class="fa-solid fa-video"></i></div>
              <div class="col-2"><h5 class="fw-bold">Vidéo</h5></div>
              <div class="col-9 progress my-3">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 50%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- </section> -->

      <section class="p-5">
        <div class="container">
          <h2 class="fw-bold">Mon portfolio</h2>
          <h3>Projets perso et pro</h3>
          <div class="row gy-4 mt-4">
            <div class="col-3">
              <div class="card">
                <img src="image5.png" alt="" />
                <div class="card-body">
                  <h3 class="card-title">Projet1</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                    totam?
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#info"
                  >
                    En savoir plus
                  </button>
                  <div class="modal fade" id="info" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div
                            class="carousel slide"
                            data-bs-ride="carousel"
                            id="anfo"
                          >
                            <div class="carousel-indicators">
                              <button
                                type="button"
                                class="active"
                                data-bs-target="#anfo"
                                data-bs-slide-to="0"
                              ></button>
                              <button
                                type="button"
                                data-bs-target="#anfo"
                                data-bs-slide-to="1"
                              ></button>
                              <button
                                type="button"
                                data-bs-target="#anfo"
                                data-bs-slide-to="2"
                              ></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/HWvPv_KurppRJNxFuYXQjPonPYJIBljeV5Ek3v22Khk/%3Frandom%3D1/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 1"
                                />
                              </div>
                              <div class="carousel-item">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/4tVZydF0-8CE6THBHyONJzQqcVn2_xn9msfFGSHKJoQ/%3Frandom%3D2/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 2"
                                />
                              </div>
                              <div class="carousel-item">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/9DuWv87ev6NnzlFc1OoPug_bpsofiWhxJSmARGVIZ7M/%3Frandom%3D3/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 3"
                                />
                              </div>
                            </div>
                            <button
                              class="carousel-control-prev"
                              type="button"
                              data-bs-target="#anfo"
                              data-bs-slide="prev"
                            >
                              <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button
                              class="carousel-control-next"
                              type="button"
                              data-bs-target="#anfo"
                              data-bs-slide="next"
                            >
                              <span class="carousel-control-next-icon"></span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <img src="image6.png" alt="" />
                <div class="card-body">
                  <h3 class="card-title">Projet2</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                    totam?
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#info"
                  >
                    En savoir plus
                  </button>
                  <div class="modal fade" id="info" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div
                            class="carousel slide"
                            data-bs-ride="carousel"
                            id="anfo"
                          >
                            <div class="carousel-indicators">
                              <button
                                type="button"
                                class="active"
                                data-bs-target="#anfo"
                                data-bs-slide-to="0"
                              ></button>
                              <button
                                type="button"
                                data-bs-target="#anfo"
                                data-bs-slide-to="1"
                              ></button>
                              <button
                                type="button"
                                data-bs-target="#anfo"
                                data-bs-slide-to="2"
                              ></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/HWvPv_KurppRJNxFuYXQjPonPYJIBljeV5Ek3v22Khk/%3Frandom%3D1/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 1"
                                />
                              </div>
                              <div class="carousel-item">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/4tVZydF0-8CE6THBHyONJzQqcVn2_xn9msfFGSHKJoQ/%3Frandom%3D2/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 2"
                                />
                              </div>
                              <div class="carousel-item">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/9DuWv87ev6NnzlFc1OoPug_bpsofiWhxJSmARGVIZ7M/%3Frandom%3D3/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 3"
                                />
                              </div>
                            </div>
                            <button
                              class="carousel-control-prev"
                              type="button"
                              data-bs-target="#anfo"
                              data-bs-slide="prev"
                            >
                              <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button
                              class="carousel-control-next"
                              type="button"
                              data-bs-target="#anfo"
                              data-bs-slide="next"
                            >
                              <span class="carousel-control-next-icon"></span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <img src="image7.png" alt="" />
                <div class="card-body">
                  <h3 class="card-title">Projet3</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                    totam?
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#info"
                  >
                    En savoir plus
                  </button>
                  <div class="modal fade" id="info" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div
                            class="carousel slide"
                            data-bs-ride="carousel"
                            id="anfo"
                          >
                            <div class="carousel-indicators">
                              <button
                                type="button"
                                class="active"
                                data-bs-target="#anfo"
                                data-bs-slide-to="0"
                              ></button>
                              <button
                                type="button"
                                data-bs-target="#anfo"
                                data-bs-slide-to="1"
                              ></button>
                              <button
                                type="button"
                                data-bs-target="#anfo"
                                data-bs-slide-to="2"
                              ></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/HWvPv_KurppRJNxFuYXQjPonPYJIBljeV5Ek3v22Khk/%3Frandom%3D1/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 1"
                                />
                              </div>
                              <div class="carousel-item">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/4tVZydF0-8CE6THBHyONJzQqcVn2_xn9msfFGSHKJoQ/%3Frandom%3D2/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 2"
                                />
                              </div>
                              <div class="carousel-item">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/9DuWv87ev6NnzlFc1OoPug_bpsofiWhxJSmARGVIZ7M/%3Frandom%3D3/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 3"
                                />
                              </div>
                            </div>
                            <button
                              class="carousel-control-prev"
                              type="button"
                              data-bs-target="#anfo"
                              data-bs-slide="prev"
                            >
                              <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button
                              class="carousel-control-next"
                              type="button"
                              data-bs-target="#anfo"
                              data-bs-slide="next"
                            >
                              <span class="carousel-control-next-icon"></span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <img src="image8.png" alt="" />
                <div class="card-body">
                  <h3 class="card-title">Projet4</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                    totam?
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#info"
                  >
                    En savoir plus
                  </button>
                  <div class="modal fade" id="info" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div
                            class="carousel slide"
                            data-bs-ride="carousel"
                            id="anfo"
                          >
                            <div class="carousel-indicators">
                              <button
                                type="button"
                                class="active"
                                data-bs-target="#anfo"
                                data-bs-slide-to="0"
                              ></button>
                              <button
                                type="button"
                                data-bs-target="#anfo"
                                data-bs-slide-to="1"
                              ></button>
                              <button
                                type="button"
                                data-bs-target="#anfo"
                                data-bs-slide-to="2"
                              ></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/HWvPv_KurppRJNxFuYXQjPonPYJIBljeV5Ek3v22Khk/%3Frandom%3D1/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 1"
                                />
                              </div>
                              <div class="carousel-item">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/4tVZydF0-8CE6THBHyONJzQqcVn2_xn9msfFGSHKJoQ/%3Frandom%3D2/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 2"
                                />
                              </div>
                              <div class="carousel-item">
                                <img
                                  class="d-block w-100"
                                  src="https://images-ext-1.discordapp.net/external/9DuWv87ev6NnzlFc1OoPug_bpsofiWhxJSmARGVIZ7M/%3Frandom%3D3/https/picsum.photos/1920/1080?width=743&height=418"
                                  alt="image 3"
                                />
                              </div>
                            </div>
                            <button
                              class="carousel-control-prev"
                              type="button"
                              data-bs-target="#anfo"
                              data-bs-slide="prev"
                            >
                              <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button
                              class="carousel-control-next"
                              type="button"
                              data-bs-target="#anfo"
                              data-bs-slide="next"
                            >
                              <span class="carousel-control-next-icon"></span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-5 bg-light">
        <div class="container">
          <h2>Un projet de création web ?</h2>
          <h3>Allons en discuter autour d'un café</h3>

          <div class="row mt-5">
            <div class="col-5">
              <img
                src="image4.png"
                alt="Image d'une tasse de café"
                width="100%"
              />
            </div>
            <div class="offset-1 col-6">
              <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              method="POST"
               class="form">
                <div class="row">
                  <div class="col-6">
                    <label class="form-label" for="nom">Nom</label>
                    <input
                      id="nom"
                      name="Nom"
                      class="form-control"
                      type="text"
                    />
                  </div>
                  <div class="col-6">
                    <label class="form-label" for="prenom">Prenom</label>
                    <input
                      id="prenom"
                      name="Prenom"
                      class="form-control"
                      type="text"
                    />
                  </div>
                </div>

                <label class="form-label" for="nom">Email</label>
                <input
                  id="email"
                  name="Email"
                  class="form-control"
                  type="email"
                />
                <label class="form-label" for="message">Message</label>
                <textarea
                  name="Message"
                  class="form-control"
                  id="message"
                  cols="30"
                  rows="10"
                ></textarea>
                <button type="submit" class="btn btn-primary">Envoyer</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="border-top">
      <div class="container py-5">
        <div class="row">
          <div class="col-4">
            <h5 class="fw-bold">
              <span class="bg-primary text-white rounded">JOHN</span> DOE
            </h5>
          </div>
          <div class="col-4">
            <div>Mention Legale</div>
          </div>
          <div class="col-4">
            <span><i class="bi bi-linkedin"></i> </span>
            <span><i class="bi bi-instagram"></i> </span>
            <span><i class="bi bi-twitter"></i> </span>
          </div>
        </div>
      </div>
      <!-- Script js -->
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://kit.fontawesome.com/14273d579a.js"
        crossorigin="anonymous"
      ></script>
      <script src="../js/script.js"></script>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
include 'connection_db.php';
$name=$email=$message=$prenom="";
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=test_input($_POST['Nom']);
  $prenom=test_input($_POST['Prenom']);
  $email=test_input($_POST['Email']);
  $message=test_input($_POST['Message']);
}
function test_input($data){
  $data=trim($data);
 $data=stripslashes($data);
   $data=htmlspecialchars($data);
  return $data;
}
if($name!=="" and $email!=="" and $message!==""){
mysqli_query($base,"insert into messages(Nom,Prenom,Email,message) values('".$name."','".$prenom."','".$email."','".$message."')");
}
?>
