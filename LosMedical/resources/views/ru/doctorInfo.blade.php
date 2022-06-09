@extends('layout')

@section('title')
    {{ strtok($doctor['nameRu'], " ") }} | LosMedical
@endsection


@section('content')

    <section class="contacts">
        <div class="container">

            <h2 class="intro-right-title contacts-title doctor-inf-title" >{{ $doctor['nameRu'] }}</h2>

            <div class="contacts-inner">

                <img id="doctors-inf-img" src="/images/{{ $doctor['img'] }}" alt="">

                <p class="advertise-text contacts-text doctors-inf-text">Направление деятельности: В своей практике успешно проводит малоинвазивные хирургические операции под местной и проводниковой анестезией (бурситы, пяточные шпоры, доброкачественные подкожные образования, операции на кости, открытые резаные и рваные раны). Проводит операции по лапараскопическим операциям по поводу ЖКБ. Проводит герниопластику при: грыже брюшной стенки, пупочной грыже, паховой грыже, послеоперационной вентральной грыже. Проводит операции на толстой и тонкой кишке и т.д. Осуществляет диагностику и лечение разных патологий опорно-двигательного аппарата.
                </p>

            </div>



            <div class="contacts-info">


                    <p class="advertise-text contacts-text">
                        @foreach($doctor->phones as $phone)
                            <a href="tel:{{ $phone['number'] }}"><i class="fa-solid fa-phone"></i></a>Тел. {{ $phone['number'] }}<br>
                        @endforeach

                        <br>
                        {{ $doctor['nameRu'] }}<br>
                        <?php
                        $profStr = '';
                        foreach ($doctor->profesions as $profesion){
                            $profStr .= $profesion['nameRu'] . ', ';
                        }
                        echo substr_replace($profStr, '.', strrpos($profStr, ','));
                        ?>

                    </p>




            </div>

        </div> <!--/.container-->
    </section> <!--/.contacts-->
@endsection
