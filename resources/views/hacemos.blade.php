@extends('layouts.app')

@section('title','QUE HACEMOS?')

@section('index')
<section class="service_section layout_padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 offset-md-2">
              <h2 class="custom_heading">¿Qué <span>hacemos?</span></h2>
              <div class="container layout_padding2">
                <div class="row">
                  <div class="col-md-4">
                    <div class="img_box">
                      <img src="/images/ico1.png" alt="" />
                    </div>
                    <div class="detail_box">
                      <h6>Placas</h6>
                      <p>
                        En Lia Shop, nos apasiona la creación de arte y diseño a
                        través de una sorprendente forma de expresión: las
                        placas con resina. Somos expertos en la combinación de
                        materiales de alta calidad y técnicas de vanguardia para
                        dar vida a creaciones únicas y personalizadas que
                        cautivan la imaginación.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img_box">
                      <img src="/images/ico2.png" alt="" />
                    </div>
                    <div class="detail_box">
                      <h6>Nuestra Esencia</h6>
                      <p>
                        Cada placa con resina que producimos es una obra de arte
                        en sí misma. Nos enorgullece ofrecer un espacio donde la
                        creatividad no tiene límites. Nuestros diseños son una
                        expresión de singularidad y originalidad, hechos a
                        medida para satisfacer tus deseos y necesidades
                        específicas.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img_box">
                      <img src="/images/ico3.png" alt="" />
                    </div>
                    <div class="detail_box">
                      <h6>Calidad y Durabilidad</h6>
                      <p>
                        La calidad es nuestra prioridad. Utilizamos materiales
                        de la más alta calidad y técnicas probadas para
                        garantizar que nuestras placas con resina sean duraderas
                        y resistentes al paso del tiempo. Cada pieza está
                        cuidadosamente inspeccionada para cumplir con nuestros
                        estándares de excelencia.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href=""> Read More </a>
              </div>
            </div>
            <div class="col-md-4">
              <img src="/images/Placa.png" alt="" class="w-100" />
            </div>
          </div>
        </div>
      </section>

      <!-- end service section -->

      <!-- info section -->
      <section class="info_section layout_padding2">
        <div class="container">
          <div class="info_items">
            <a href="">
              <div class="item">
                <div class="img-box box-1">
                  <img src="" alt="" />
                </div>
                <div class="detail-box">
                  <p>Trinidad - Beni - Bolivia</p>
                </div>
              </div>
            </a>
            <a href="">
              <div class="item">
                <div class="img-box box-2">
                  <img src="" alt="" />
                </div>
                <div class="detail-box">
                  <p>+591 74752640</p>
                </div>
              </div>
            </a>
            <a href="">
              <div class="item">
                <div class="img-box box-3">
                  <img src="" alt="" />
                </div>
                <div class="detail-box">
                  <p>liashop@gmail.com</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
@endsection