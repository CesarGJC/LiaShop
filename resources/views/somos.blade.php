@extends('layouts.app')

@section('title','QUIENES SOMOS?')

@section('index')
<section class="about_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="img-box">
                <img src="/images/Logo.png" alt="" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-box">
                <h2 class="custom_heading">
                  ¿Quiénes Somos?
                  <span> Lia Shop </span>
                </h2>
                <p>
                  En Lia Shop, somos más que una empresa: somos un equipo de
                  apasionados creativos que se dedican a dar vida a tus sueños a
                  través de la magia de la resina. Desde nuestros modestos
                  comienzos, hemos crecido y evolucionado, pero nuestra pasión
                  por la artesanía y la singularidad sigue siendo el motor que
                  impulsa todo lo que hacemos.
                </p>
                <div>
                  <a href="qhacemos.html"> Mas informacion </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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