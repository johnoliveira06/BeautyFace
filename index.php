<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Beauty Face</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-light header-logo">
        <a class="navbar-brand" href="#">
          <img src="./assets/icons/star.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          <a href="#">Beauty Face</a>
        </a>
      </nav>
      <div class="header-nav">
        <ul>
          <li>
            <a href="#"><img src="./assets/icons/search.svg" alt="Search" /></a>
          </li>
          <li>
            <a href="./cadastro.php"><img src="./assets/icons/login.svg" alt="Login" /></a>
          </li>
          <li>
            <a href="./cart.php"><img src="./assets/icons/cart.svg" alt="Cart" /></a>
          </li>
        </ul>
      </div>
    </header>
    <section class="banner">
      <img src="./assets/images/banner.jpg" alt="Banner" />
    </section>
    <section class="produtos">
      <div class="produtos-header">
        <div class="produtos-info">
          <h2>PROMOÇÃO</h2>
          <p>9 produtos</p>
        </div>
      </div>
      <div class="lista-produtos">
        <div class="produtos-item">
          <img
            src="./assets/images/pharma-hemp-complex-yVAXSK6zFIM-unsplash.jpg"
            alt="Produto 1"
          />
          <a href="#" data-toggle="modal" data-target="#produto1">
          <p>Sabonete</p>
          <div class="produtos-preco">R$ <span>20, 00</span></div>
          </a>
        </div>
        <div class="produtos-item">
          <img src="./assets/images/devin-avery-bMH8ub9z1_U-unsplash.jpg" alt="Produto 2" />
          <a href="#" data-toggle="modal" data-target="#produto2">
          <p>Shampoo</p>
          <div class="produtos-preco">R$ <span>15, 00</span></div>
        </a>
        </div>
        <div class="produtos-item">
          <img src="./assets/images/devin-avery-BRVqq2uak4E-unsplash.jpg" alt="Produto 3" />
          <a href="#" data-toggle="modal" data-target="#produto3">
          <p>Kit Shampoo</p>
          <div class="produtos-preco">R$ <span>30, 00</span></div>
        </a>
        </div>
        <div class="produtos-item">
          <img
            src="./assets/images/gabrielle-henderson-1DMNn6gBbwQ-unsplash.jpg"
            alt="Produto 4"
          />
          <a href="#" data-toggle="modal" data-target="#produto4">
          <p>Shampoo</p>
          <div class="produtos-preco">R$ <span>20, 00</span></div>
        </a>
        </div>
        <div class="produtos-item">
          <img
            src="./assets/images/nery-montenegro-SmEty_TVr80-unsplash.jpg"
            alt="Produto 5"
          />
          <a href="#" data-toggle="modal" data-target="#produto5">
          <p>Creme Facial</p>
          <div class="produtos-preco">R$ <span>25, 00</span></div>
        </a>
        </div>
        <div class="produtos-item">
          <img
            src="./assets/images/olena-sergienko-GOVTETevRm8-unsplash.jpg"
            alt="Produto 6"
          />
          <a href="#" data-toggle="modal" data-target="#produto6">
          <p>Perfume</p>
          <div class="produtos-preco">R$ <span>80, 00</span></div>
        </a>
        </div>
        <div class="produtos-item">
          <img
            src="./assets/images/phaedra-botanicals-uFAHrKYkTVI-unsplash.jpg"
            alt="Produto 7"
          />
          <a href="#" data-toggle="modal" data-target="#produto7">
          <p>Protetor Solar</p>
          <div class="produtos-preco">R$ <span>35, 00</span></div>
        </a>
        </div>
        <div class="produtos-item">
          <img
            src="./assets/images/pharma-hemp-complex-tAzdKblAinw-unsplash.jpg"
            alt="Produto 8"
          />
          <a href="#" data-toggle="modal" data-target="#produto8">
          <p>Kit Creme</p>
          <div class="produtos-preco">R$ <span>70, 00</span></div>
        </a>
        </div>
        <div class="produtos-item">
          <img src="./assets/images/chandra-oh-y5hRv6UNKMg-unsplash.jpg" alt="Produto 9" />
          <a href="#" data-toggle="modal" data-target="#produto9">
          <p>Anti Rugas</p>
          <div class="produtos-preco">R$ <span>40, 00</span></div>
        </a>
        </div>
      </div>
    </section>
    <section class="newsletter">
      <div class="newsletter-conteudo">
        <div class="newsletter-links">
          <ul>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Termos de serviço</a></li>
            <li><a href="#">Política de privacidade</a></li>
            <li><a href="#">Cancelamento, troca e reembolso</a></li>
          </ul>
        </div>
        <div class="newsletter-form">
          <label for="input">Newsletter</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Digite seu melhor e-mail"  aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button type="button" class="btn btn-success">Inscrever</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="social">
        <ul>
          <li>
            <a href="#"><img src="./assets/icons/instagram.svg" alt="Instagram" /></a>
          </li>
          <li>
            <a href="#"><img src="./assets/icons/facebook.svg" alt="Facebook" /></a>
          </li>
        </ul>
      </div>
      <div class="pagamento">
        <ul>
          <li>
            <a href="#"><img src="./assets/icons/mastercard.svg" alt="Mastercard" /></a>
          </li>
          <li>
            <a href="#"><img src="./assets/icons/paypal.svg" alt="Paypal" /></a>
          </li>
          <li>
            <a href="#"><img src="./assets/icons/visa.svg" alt="Visa" /></a>
          </li>
        </ul>
      </div>
    </footer>
    
    <div class="modais">
    <div class="modal fade" id="produto1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Sabonete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        <img
          src="./assets/images/pharma-hemp-complex-yVAXSK6zFIM-unsplash.jpg"
          alt="Produto 1"
          class="asas"
            />
            <p>Sabonete</p>
    <div class="produtos-preco">R$ <span>20, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produto2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Shampoo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="./assets/images/devin-avery-bMH8ub9z1_U-unsplash.jpg" alt="Produto 2" />
            <p>Shampoo</p>
            <div class="produtos-preco">R$ <span>15, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produto3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Kit Shampoo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="./assets/images/devin-avery-BRVqq2uak4E-unsplash.jpg" alt="Produto 3" />
          <p>Kit Shampoo</p>
          <div class="produtos-preco">R$ <span>30, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produto4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Shampoo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img
            src="./assets/images/gabrielle-henderson-1DMNn6gBbwQ-unsplash.jpg"
            alt="Produto 4"
          />
          <p>Shampoo</p>
          <div class="produtos-preco">R$ <span>20, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produto5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Creme Facial</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img
            src="./assets/images/nery-montenegro-SmEty_TVr80-unsplash.jpg"
            alt="Produto 5"
          />
          <p>Creme Facial</p>
          <div class="produtos-preco">R$ <span>25, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produto6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Perfume</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img
            src="./assets/images/olena-sergienko-GOVTETevRm8-unsplash.jpg"
            alt="Produto 6"
          />
          <p>Perfume</p>
          <div class="produtos-preco">R$ <span>80, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produto7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Protetor Solar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img
            src="./assets/images/phaedra-botanicals-uFAHrKYkTVI-unsplash.jpg"
            alt="Produto 7"
          />
          <p>Protetor Solar</p>
          <div class="produtos-preco">R$ <span>35, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produto8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Kit Creme</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img
            src="./assets/images/pharma-hemp-complex-tAzdKblAinw-unsplash.jpg"
            alt="Produto 8"
          />
          <p>Kit Creme</p>
          <div class="produtos-preco">R$ <span>70, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produto9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Anti Rugas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="./assets/images/chandra-oh-y5hRv6UNKMg-unsplash.jpg" alt="Produto 9" />
            <p>Anti Rugas</p>
            <div class="produtos-preco">R$ <span>40, 00</span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  </body>
</html>