@extends('layouts.app')
@section('title')
    {{__('Police')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            <div class="col-12">
                @include('layouts.errors')
                <div class="card">
                    <div class="card-body">
                    <div class="row col-sm-12">
                        <div class="col-sm-4">
                            <img src="{{ asset('images/fako.PNG') }}" alt="" height="150">
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text">MOUNT FAKO INSURANCE BROKERS & CO.</h5>
                            <h5 class="text-center mt-4">ASSUREUR - CONSEIL</h5>
                        </div>
                        <div class="col-sm-2">
                        <span class="h6">@php
                                echo "le : ".date('d M Y');
                            @endphp</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-center mb-2">
                            <u>ASSURANCE AUTOMOBILE</u>
                        </h2>

                    </div>
                    <div class="container pt-2 mb-3" style="border-radius:10px; border: 1px solid grey;">
                        <div class="row col-sm-12">
                            <div class="col-sm-4">
                                <h3 class="mt-2">Objet de l'avenant :</h3>
                            </div>
                            <div class="col-sm-8">
                                <h2 class="mt-2 bg-light text-center">{{ $policies->business_type }}</h2>
                                <h4  class="mt-4">N° POLICE : <span class="p-1 bg-light text-center">{{ $policies->policy_number }}</span></h4>
                                <h4  class="mt-4">SOCIETE DE PLACEMENT : {{ $policies->insurer }}</h4>
                                <h4  class="mt-4">IMMATRICULATION : <span class="p-1 bg-light text-center">{{ $policies->immatriculation }}</span> </h4>
                            </div>
                        </div>
                        <div class="row col-sm-12 mt-5">

                            <table class="border-1">
                                <tbody>
                                    <tr>
                                        <td>MARQUE</td>
                                        <td class="h6">{{ $policies->mark }}</td>
                                        <td>PUISSANCE</td>
                                        <td class="h6">{{ $policies->power }}</td>
                                        <td>VAL VENALE</td>
                                        <td class="h6">{{ $policies->val_venale }}</td>
                                    </tr>
                                    <tr>
                                        <td>GENRE</td>
                                        <td class="h6">{{ $policies->genre }}</td>
                                        <td>NB PLACE</td>
                                        <td class="h6">{{ $policies->nb_place }}</td>
                                        <td>VAL.ACC</td>
                                        <td class="h6">{{ $policies->val_acc }}</td>
                                    </tr>
                                    <tr>
                                        <td>CAT</td>
                                        <td class="h6">{{ $policies->cat }}</td>
                                        <td>DATE 1ere MC</td>
                                        <td class="h6">{{ $policies->date_mc }}</td>
                                        <td>DATE EFFET</td>
                                        <td class="h6">{{ $policies->start_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>ZONE</td>
                                        <td class="h6">{{ $policies->zone }}</td>
                                        <td>SERIE</td>
                                        <td class="h6">{{ $policies->serie }}</td>
                                        <td>DATE EXPIRATION</td>
                                        <td class="h6">{{ $policies->expery_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>CONDUCTEUR</td>
                                        <td class="h6">L'Assuré</td>
                                        <td>PTAC</td>
                                        <td class="h6">{{ $policies->ptac }}</td>
                                        <td>ATTESTATION</td>
                                        <td class="h6">{{ $policies->attestation }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>VAL NEUVE</td>
                                        <td class="h6">{{ $policies->val_neuve }}</td>
                                        <td>CARTE ROSE</td>
                                        <td class="h6">{{ $policies->carte_rose }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container p-5">
                    <div class="row col-sm-12">
                        <div class="col-sm-6">
                            <ul class="list-inline p-0 m-0">
                                <li>
                                    <span class="h6 mt-5">SOUSCRIPTEUR :</span> <small class="float-right mt-1">{{ $policies->client->name }}</small><br>
                                    <span class="h6 mt-5">PROFESSION :</span> <small class="float-right mt-1">{{ $policies->client->profession }}</small><br>
                                    <span class="h6 mt-5">ADRESSE :</span> <small class="float-right mt-1">{{ $policies->client->adresse }}</small><br>
                                    <span class="h6 mt-5">ASSURE:</span> <small class="float-right mt-1">{{ $policies->client->name }}</small><br>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 m-6 w-50">
                            <div class="">
                            <span>PRIME QUITANCE</span>
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Prine nette</th>
                                        <th class="text-center" scope="col">Acc</th>
                                        <th class="text-center" scope="col">F.C</th>
                                        <th class="text-center" scope="col">TVA</th>
                                        <th class="text-center" scope="col">Carte rose</th>
                                        <th class="text-center" scope="col">f.g</th>
                                        <th class="text-center" scope="col">p.ttc.assur</th>
                                        <th class="text-center" scope="col">dta</th>
                                        <th class="text-center" scope="col">prime Totale</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach ($primes as $prime)
                                        <tr>
                                        <td class="text-center">{{ $prime->Pnette }}</td>
                                        <td class="text-center">{{ $prime->access }}</td>
                                        <td class="text-center">{{ $prime->fc }}</td>
                                        <td class="text-center">{{ $prime->tva }}</td>
                                        <td class="text-center">{{ $prime->carte_r }}</td>
                                        <td class="text-center">{{ $prime->fg }}</td>
                                        <td class="text-center">{{ $prime->primettc }}</td>
                                        <td class="text-center">{{ $prime->dta }}</td>
                                        <td class="text-center">{{ $prime->HTprimenette }}</td>
                                        </tr>
                                    @endforeach

                                </tbody> --}}
                                </table>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="container pt-2 mb-3">

                    <div class="row">
                        <div class="col-sm-12">
                                <p style="border: 1px;" class="text-center"><strong> ** La vignette de ce véhicule est payée suivant l'attestion n° 111*A*0093681, délivrée par le bureau émetteur MOUNT FAKO
                                    INSURANCE BROKERS & Co DOUALA, pour la compagnie NSIA ASSURANCES, dans la période du 24/09/2022 au 23/09/2023</strong> </p>
                        </div>
                    </div>
                    <div class="row m-3" style="border-radius:10px; border: 1px solid grey;">
                        <div class="col-sm-12">
                                <p style="border: 1px;" class="text-center">Etendue Territoriale: La "ResponsabilitÈ Civile" s'exerce au Cameroun et dans le territoire des Etats membres de la CIMA. Les
                                    autres garanties s'exercent au Cameroun exclusivement, sauf convention contraire.
                                    Le prÈsent contrat est Ètabli suivant les dÈclarations du Souscripteur. En cas de rÈticence, de fausse dÈclaration intentionnelle,
                                    d'omission ou de dÈclaration inexacte, le Souscripteur s'expose aux sanctions prÈvues par les Articles 18 et 19 du code Cima, sous
                                    rÈserve des dispositions de l'Article 7 dudit Code. </p>
                        </div>
                    </div>
                        <div class="row col-sm-12 mt-5 mb-5">
                            <div class="col-sm-4">
                                <p><strong>le souscripteur</strong>(Signature prÈcÈdÈe de la mention
                                    "Lu et approuvÈ")</p>
                                    <p>

                                    </p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <span>@php
                                    echo "le : ".date('d M Y');
                                @endphp</span>
                            </div>
                            <div class="col-sm-4">
                                <p><strong>Pour la societe</strong></p>
                                    <p>

                                    </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="text-center w-70 text-black">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="mb-0 mt-4 text-center m-3 h6">

                                Douala, Rue Bebey Elame près du Garage 3S - BP: 3644 Tél: (237) 233 43 86 67 - (237) 657 370 848 - (237) 699 842 253 RC/DLA/2003/B/032189
                                N° Contribuable : M120300016163J Limbe, CDC Credit Union Head Office Bulding - Bota Tél: 233 332 026, 678 830 208 - 675 913 356
                                Yaoundé, Immeuble Casanova, Rue Narvic-Warda P.O Box 32 Tél: 694 594 531 - 677 827 591 E-mail : contact@mfibc.com, Web : www.mfibc.co
                            </p>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="{{route('policy.pdf', $policies)}}" type="button" class="btn btn-primary" >Print</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function imprimer() {
            var printContents = document.getElementById('billing').innerHTML;
            var OriginaContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            windows.print();
            document.body.innerHTML = OriginaContents;

        }
    </script>
    {{-- {{ Form::hidden('currency', getCurrencySymbol(),['id' => 'currency']) }} --}}
@endsection
