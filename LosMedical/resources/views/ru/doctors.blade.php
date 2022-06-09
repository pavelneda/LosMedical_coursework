@extends('layout')

@section('title')
    Наши врачи | LosMedical
@endsection


@section('content')

    <section class="doctors">
        <div class="container">
            <h2 class="intro-right-title doctors-title" >Врачи медицинского центра</h2>

            <div class="doctors-list">

                @foreach($doctors as $doctor)
                    <div class="doctors-item">
                        <img src="/images/{{ $doctor->img }}" alt="">
                        <div class="doctors-info">
                            <h3 class="doctors-name">{{ $doctor->nameRu }}</h3>
                            <p class="benefit-text doctors-prof">
                                <?php
                                $profStr = '';
                                foreach ($doctor->profesions as $profesion){
                                    $profStr .= $profesion['nameRu'] . ', ';
                                }
                                echo substr_replace($profStr, '.', strrpos($profStr, ','));
                                ?>
                            </p>
                            <span class="doctors-exp"><i class="fa-regular fa-clock"></i>Опыт работы: {{ $doctor->exp }} лет</span>
                            <a href="{{ action([\App\Http\Controllers\PagesController::class, 'doctorInfo'], ['doctor' => $doctor , 'lang' => 'ru']) }}" class="btn doctors-btn">
                                Подробнее о враче
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div> <!--/.container-->
    </section> <!--/.doctors-->
@endsection
