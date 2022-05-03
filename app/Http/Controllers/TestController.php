<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function LessonOne()
    {
        return "Моя первая программа";
    }

    public function LessonTwo(Request $request)
    {
        $data = [];
        if($request->has("text"))
            $data['text']=$request->input('text');
        $data['token']=$request->input('token','none-token');
        return;
    }

    public function ExerciseOne()
    {
        return "Я люблю учиться в ЧРТ";
    }

    public function ExerciseTwo($name)
    {
        return "Меня зовут ". $name;
    }
    public function ExerciseThree($name, $item)
    {
        return "Меня зовут ". $name . "и я люблю " . $item;
    }

    public function ExerciseFive($a,$b)
    {
        $c = $a+$b;
        return $c;
    }

    public function ExerciseFour()
    {
        $a=5;
        $b=10;
        $c=$a+$b;
        return "Сумма двух чисел равна ".$c;
    }
    public function ExerciseSix($cipher)
    {
        if($cipher == "keyOneTest"){
            return "Ключ есть";
        }
        else{
            return "Ключа нет";
        }

    }
    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }


        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';


        return view('template', compact('detachment', 'user'));
    }

    public function LessonTemplateZadanieOne()
    {
        return view('zadanie1');
    }
    public function LessonTemplateZadanieTwo($organization)
    {
        return view('zadanie2',compact('organization'));
    }

    public function LessonTemplateZadanieThree($name)
    {
        return view('zadanie3',compact('name'));
    }
    public function LessonTemplateZadanieFourFiveSix()
    {
        $array = array(
            '1','2','3'
        );
        $number = array(
            1,2,3,4,5,6,7,8,9
        );
        return view('zadanie456',compact('array','number'));
    }
}

