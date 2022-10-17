
@extends('default')

@section('contenue')
    


     <div class="inner-page-banner-area" style="background-image: url('dir/img/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Inscription</h1>
                    <ul>
                        <li><a href="#">Accueil</a> -</li>
                        <li>Inscription</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- About Page 1 Area Start Here -->
        <div class="about-page1-area">
            <div class="container">
                <div class="row about-page1-inner">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                          <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">INSCRIPTION </h3>
                                    <div class="sidebar-find-course">
                                        <x:notify-messages />
                                        <form id="checkout-form"  action="{{URL('sign-up')}}" method="POST">

                                            @csrf
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Nom" class="form-control" type="text"  name="name"/>
                                                @if($errors->has('email'))
                                                {{ $errors->first('email')}}
                                            @endif
                                            </div>
                                            
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Prénoms" class="form-control" type="text"  name="firstname"/>
                                                @if($errors->has('email'))
                                                {{ $errors->first('email')}}
                                            @endif
                                            </div> 
                                            
                                               <div class="form-group course-name">
                                                   <input id="first-name" placeholder="E-mail" class="form-control" type="email" name="email" />
                                                   @if($errors->has('email'))
                                                   {{ $errors->first('email')}}
                                               @endif
                                            </div>
                                            
                                             <div class="form-group course-name">
                                                 <input id="first-name" placeholder="Mot de passe" class="form-control" type="password"  name="password" />
                                                 @if($errors->has('email'))
                                                 {{ $errors->first('email')}}
                                                 @endif
                                            </div>
                                          
                                            <div class="form-group">
                                                <button class="sidebar-search-btn-full disabled" type="submit" name="register" >Valider</button>
                                            </div>
                                        </form>
                                        <hr>
                                        <a href="/"> Mot de passe  oublié ?</a>  | <a href="/login"> Déjà inscrit ?</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        
                        <div class="about-page-img-holder">
                            <img src="dir/img/inscri.png" class="img-responsive" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
 

        @endsection