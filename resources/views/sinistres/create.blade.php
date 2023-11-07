@extends('layouts.app')
@section('title')
    {{__('messages.product.add_product')}}
@endsection
@section('header_toolbar')
@endsection
@section('content')
    @php $styleCss = 'style'; @endphp
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-end mb-5">
                    <h1>@yield('title')</h1>
                    <a class="btn btn-outline-primary float-end"href="{{ route('sinistres.index') }}">{{ __('messages.common.back') }}</a>
                </div>

                <div class="col-12">
                    @include('layouts.errors')
                </div>
                <div class="card">
                    <div class="card-body">
                        <h1>Ajouter un sinistre</h1>
                        <form action="{{ route('sinistres.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="policy_id">Numéro de police</label>
                                <input type="text" name="policy_id" class="form-control" required>
                            </div>

                            <div class="form-group">
                                {{-- <label for="user_id">Identifiant de l'utilisateur</label> --}}
                                <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}" required>
                            </div>

                            <div class="form-group">
                                <label for="sinistre_num">Numéro de sinistre</label>
                                <input type="text" name="sinistre_num" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="immatriculation">Immatriculation du véhicule</label>
                                <input type="text" name="immatriculation" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="mark">Marque du véhicule</label>
                                <input type="text" name="mark" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="power">Puissance du véhicule</label>
                                <input type="text" name="power" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="usage">Usage du véhicule</label>
                                <input type="text" name="usage" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="zone">Zone du véhicule</label>
                                <input type="text" name="zone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="date_h">Date et heure du sinistre</label>
                                <input type="date" name="date_h" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="ptac">Poids total autorisé en charge (PTAC)</label>
                                <input type="number" name="ptac" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="date_visite">Date de la dernière visite technique</label>
                                <input type="date" name="date_visite" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="immatriculation_adv">Immatriculation adverse</label>
                                <input type="text" name="immatriculation_adv" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="mark_adv">Marque adverse</label>
                                <input type="text" name="mark_adv" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="police_num">Numéro de police</label>
                                <input type="text" name="police_num" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="insure_adv">Assurance adverse</label>
                                <input type="text" name="insure_adv" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="zone_adv">Zone adverse</label>
                                <input type="text" name="zone_adv" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="date_v_adv">Date de visite de l'expert</label>
                                <input type="date" name="date_v_adv" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="name_c">Nom du conducteur</label>
                                <input type="text" name="name_c" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="link_insure">Lien avec l'assuré</label>
                                <input type="text" name="link_insure" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="age_c">Âge du conducteur</label>
                                <input type="number" name="age_c" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="cat">Catégorie du permis</label>
                                <input type="text" name="cat" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="num_date">Numéro et date du permis</label>
                                <input type="text" name="num_date" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="capacity">Capacité du véhicule</label>
                                <input type="text" name="capacity" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="name_c2">Nom du second conducteur</label>
                                <input type="text" name="name_c2" class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label for="activity">Activité du conducteur</label>
                                <input type="text" name="activity" class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label for="age_c2">Âge du second conducteur</label>
                                <input type="number" name="age_c2" class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label for="passager">Nombre de passagers</label>
                                <input type="number" name="passager" class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label for="lieu">Lieu de l'accident</label>
                                <input type="text" name="lieu" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="venant">Venant de</label>
                                <input type="text" name="venant" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="allant">Allant à</label>
                                <input type="text" name="allant" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="circonstance">Circonstances de l'accident</label>
                                <textarea name="circonstance" class="form-control"></textarea>
                            </div>
                        
                            <div class="form-group">
                                <label for="croquis">Croquis de l'accident</label>
                                <textarea name="croquis" class="form-control"></textarea>
                            </div>
                        
                            <div class="form-group">
                                <label for="temoins">Témoins éventuels</label>
                                <textarea name="temoins" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name_adv">Nom de l'expert</label>
                                <input type="text" name="name_adv" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="adresse">Adresse de l'expert</label>
                                <input type="text" name="adresse" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="name_c_adv">Nom du conducteur adverse</label>
                                <input type="text" name="name_c_adv" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="permis">Numéro de permis du conducteur adverse</label>
                                <input type="text" name="permis" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="del_date_adv">Date de délivrance du permis du conducteur adverse</label>
                                <input type="date" name="del_date_adv" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="capacity_adv">Capacité du véhicule adverse</label>
                                <input type="text" name="capacity_adv" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="assurance">Assurance du conducteur adverse</label>
                                <input type="text" name="assurance" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="corporeil">Dommages corporels subis</label>
                                <input type="text" name="corporeil" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="corporeil_adv">Dommages corporels subis par le conducteur adverse</label>
                                <input type="text" name="corporeil_adv" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="materiel">Dommages matériels subis</label>
                                <input type="text" name="materiel" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="materiel_adv">Dommages matériels subis par le conducteur adverse</label>
                                <input type="text" name="materiel_adv" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="vehicule_v">Véhicule venant en cause</label>
                                <input type="text" name="vehicule_v" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="vehicule_v_adv">Véhicule venant en cause du conducteur adverse</label>
                                <input type="text" name="vehicule_v_adv" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Créer</button>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('default_image_url', asset('images/default-product.jpg') ,['id' => 'defaultImageUrl']) }}
@endsection
