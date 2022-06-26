<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\ItemUnit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public static $items = [
        [
            "code" => "-1",
            "name" => "المواد الجاهزة",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "-100",
            "name" => "الشراب",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "10001",
            "name" => "شراب وينر ظرف 9 غ محلى",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 24,
            "unit3"=> "طرد",
            "factor3" => 288
        ],
        [
            "code" => "10002",
            "name" => "شراب عمار ظرف 35 غ اصبع",
            "unit1" => "ظرف ",
            "unit2" => "علبة",
            "factor2" => 12,
            "unit3"=> "طرد",
            "factor3" => 144
        ],
        [
            "code" => "10003",
            "name" => "شراب عمار ظرف 35 غ مربع",
            "unit1" => "ظرف ",
            "unit2" => "علبة",
            "factor2" => 12,
            "unit3"=> "طرد",
            "factor3" => 72
        ],
        [
            "code" => "10004",
            "name" => "شراب عمار 650 غ",
            "unit1" => "كيس",
            "unit2" => "صندوق",
            "factor2" => 12,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10005",
            "name" => "شراب عمار 2 كغ علبة بلاستيك",
            "unit1" => "علبة",
            "unit2" => "صندوق",
            "factor2" => 6,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10006",
            "name" => "شراب محلى وينر دكما",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10007",
            "name" => "شراب محلى عمار دكما",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10008",
            "name" => "شراب عادي عمار دكما",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10009",
            "name" => "شراب عمار 10غ غير محلى",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 48,
            "unit3"=> "طرد",
            "factor3" => 288
        ],
        [
            "code" => "-101",
            "name" => "الميلو",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "10101",
            "name" => "ميلو وينر علبة بلاستيك 200 غ",
            "unit1" => "صندوق",
            "unit2" => "علبة",
            "factor2" => 12,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10102",
            "name" => "ميلو وينر ظرف 25 غ",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 100,
            "unit3"=> "صندوق",
            "factor3" => 200
        ],
        [
            "code" => "10103",
            "name" => "ميلو الفائز علبة بلاستيك 250 غ",
            "unit1" => "علبة",
            "unit2" => "صندوق",
            "factor2" => 12,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10104",
            "name" => "ميلو الفائز ظرف 20غ",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 96,
            "unit3"=> "طرد",
            "factor3" => 192
        ],
        [
            "code" => "10105",
            "name" => "ميلو الفائز ظرف 20 غ * 12 علبة",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 12,
            "unit3"=> "صندوق",
            "factor3" => 144
        ],
        [
            "code" => "10106",
            "name" => "ميلو الفائز دكما",
            "unit1" => "كيس",
            "unit2" => "صندوق",
            "factor2" => 2,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10107",
            "name" => "ميلو الفائز فرط",
            "unit1" => "كغ",
            "unit2" => "كيس",
            "factor2" => 0.25,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10108",
            "name" => "ميلو الفائز 400 غ",
            "unit1" => "كيس",
            "unit2" => "صندوق",
            "factor2" => 20,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10109",
            "name" => "ميلو الفائز 800 غ",
            "unit1" => "كيس",
            "unit2" => "صندوق",
            "factor2" => 10,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10110",
            "name" => "ميلو وينر علبة بلاستيك 250 غ",
            "unit1" => "علبة",
            "unit2" => "صندوق",
            "factor2" => 12,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10111",
            "name" => "ميلو وينر ظرف 20 غ",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 100,
            "unit3"=> "طرد",
            "factor3" => 200
        ],
        [
            "code" => "10112",
            "name" => "ميلو وينر 800غ",
            "unit1" => "كيس",
            "unit2" => "صندوق",
            "factor2" => 10,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-102",
            "name" => "الكابتشينو",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "10201",
            "name" => "كابتشينو وينر علب",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 20,
            "unit3"=> "طرد",
            "factor3" => 240
        ],
        [
            "code" => "10202",
            "name" => "كابتشينو وينر دكما",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10203",
            "name" => "وينر 3*1 علب",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 24,
            "unit3"=> "طرد",
            "factor3" => 288
        ],
        [
            "code" => "10204",
            "name" => "وينر 3*1 مطربان",
            "unit1" => "ظرف",
            "unit2" => "مرطبان",
            "factor2" => 35,
            "unit3"=> "طرد",
            "factor3" => 210
        ],
        [
            "code" => "10205",
            "name" => "وينر 3*1 دكما",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-103",
            "name" => "السحلب",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "10301",
            "name" => "سحلب وينر",
            "unit1" => "ظرف",
            "unit2" => "علبة",
            "factor2" => 10,
            "unit3"=> "طرد",
            "factor3" => 120
        ],
        [
            "code" => "10304",
            "name" => "سحلب وينر دكما",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-104",
            "name" => "شوكولا",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "10401",
            "name" => "شوكولا وينر 300 غ",
            "unit1" => "علبة",
            "unit2" => "صندوق",
            "factor2" => 12,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10402",
            "name" => "شوكولا وينر 700 غ",
            "unit1" => "علبة",
            "unit2" => "صندوق",
            "factor2" => 6,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "10403",
            "name" => "شوكولا وينر دكما",
            "unit1" => "كغ",
            "unit2" => "طن",
            "factor2" => 1000,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-2",
            "name" => "المنكهات الصناعية والمواد الأولية",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "-201",
            "name" => "نكهة جوفيدان",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "20101",
            "name" => "نكهة جوفيدان برتقال 74",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20102",
            "name" => "نكهة جوفيدان برتقال 75",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20103",
            "name" => "نكهة جوفيدان منكا",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20104",
            "name" => "نكهة جوفيدان منكا مصرية",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20105",
            "name" => "نكهة جوفيدان ليمون",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20106",
            "name" => "نكهة جوفيدان قشر ليمون",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20107",
            "name" => "نكهة جوفيدان توت",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20108",
            "name" => "نكهة جوفيدان اناناس",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20109",
            "name" => "نكهة جوفيدان دراق",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20110",
            "name" => "نكهة جوفيدان تفاح",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20111",
            "name" => "نكهة جوفيدان فريز",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20112",
            "name" => "نكهة جوفيدان فيمتو",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20113",
            "name" => "نكهة جوفيدان يوسفي",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20114",
            "name" => "نكهة جوفيدان قمر الدين",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20115",
            "name" => "كلاودي جوفيدان",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-202",
            "name" => "نكهة ارومسا",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "20201",
            "name" => "نكهة ارومسا برتقال",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20202",
            "name" => "نكهة ارومسا منكا",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20203",
            "name" => "نكهة ارومسا توت",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20204",
            "name" => "نكهة ارومسا ليمون",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20205",
            "name" => "نكهة ارومسا دراق",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20206",
            "name" => "نكهة ارومسا اناناس",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20207",
            "name" => "نكهة ارومسا تفاح",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20208",
            "name" => "نكهة ارومسا يوسفي",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20209",
            "name" => "نكهة ارومسا فريز",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20210",
            "name" => "نكهة ارومسا فيمتو",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20211",
            "name" => "نكهة ارومسا قمر الدين",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-203",
            "name" => "نكهة سمرايز",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "20301",
            "name" => "نكهة سمرايز برتقال 61",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20302",
            "name" => "نكهة سمرايز برتقال 56",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20303",
            "name" => "نكهة سمرايز منكا",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20304",
            "name" => "نكهة سمرايز توت",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20305",
            "name" => "نكهة سمرايز ليمون",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20306",
            "name" => "نكهة سمرايز اناناس",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20307",
            "name" => "نكهة سمرايز دراق",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20308",
            "name" => "نكهة سمرايز تفاح",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20309",
            "name" => "نكهة سمرايز فريز",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20310",
            "name" => "نكهة سمرايز فيمتو",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20311",
            "name" => "نكهة سمرايز يوسفي",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20312",
            "name" => "نكهة سمرايز قمر الدين",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20313",
            "name" => "نكهة سمرايز كابتشينو",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20314",
            "name" => "كلاودي سمرايز",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-204",
            "name" => "نكهة اروماتيك",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "20401",
            "name" => "نكهة اروماتيك برتقال",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20402",
            "name" => "نكهة اروماتيك منكا",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20403",
            "name" => "نكهة اروماتيك توت",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20404",
            "name" => "نكهة اروماتيك توتي فروتي",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20405",
            "name" => "نكهة اروماتيك ليمون",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20406",
            "name" => "نكهة اروماتيك قشر ليمون",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20407",
            "name" => "نكهة اروماتيك دراق",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20408",
            "name" => "نكهة اروماتيك اناناس",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20409",
            "name" => "نكهة اروماتيك تفاح",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20410",
            "name" => "نكهة اروماتيك فريز",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20411",
            "name" => "نكهة اروماتيك فيمتو",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20412",
            "name" => "نكهة اروماتيك يوسفي",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20413",
            "name" => "نكهة اروماتيك قمر الدين",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20414",
            "name" => "نكهة فواكه استوائية اروماتيك",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20415",
            "name" => "نكهة كابتشينو أروماتيك",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-205",
            "name" => "نكهة امكو",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "20501",
            "name" => "نكهة امكو فيمتو",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-206",
            "name" => "نكهة برتقال وجزر",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "20601",
            "name" => "نكهة برتقال وجزر اسبانية",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-207",
            "name" => "منكهات سائلة",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "20701",
            "name" => "نكهة ماء زهر سائلة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20702",
            "name" => "نكهة قرفة سائلة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "20703",
            "name" => "نكهة مستكة سائلة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-221",
            "name" => "مواد الشراب",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "22101",
            "name" => "حمض الليمون",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22102",
            "name" => "سترات الصوديوم",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22103",
            "name" => "ثري كالسيوم فوسفات",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22104",
            "name" => "كاربوكسي ميتيل سيلليوز cmc",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22105",
            "name" => "مالتو دكسترين",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22106",
            "name" => "اكزنتان",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22107",
            "name" => "سيلكا",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22108",
            "name" => "اكسيد التيتانيوم",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22109",
            "name" => "اسبرتام",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22110",
            "name" => "اسيسلفام",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22111",
            "name" => "ملح طعام",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-222",
            "name" => "مواد الميلو",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "22201",
            "name" => "كاكاو 10/12",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22202",
            "name" => "مصل الحليب",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22203",
            "name" => "فانيليا",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-223",
            "name" => "مواد الكابتشينو و 3*1",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "22301",
            "name" => "مبيض قهوة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22302",
            "name" => "رغوة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22303",
            "name" => "قهوة سريعة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-224",
            "name" => "مواد السحلب",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "22401",
            "name" => "صمغ غوار",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22402",
            "name" => "نشاء معدل",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22403",
            "name" => "حليب مجفف",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22404",
            "name" => "جوز هند",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22405",
            "name" => "قرفة ناعمة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "22406",
            "name" => "خميرة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-231",
            "name" => "الملونات",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "23101",
            "name" => "ملون برتقالي 110",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "23102",
            "name" => "ملون اصفر 102",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "23103",
            "name" => "ملون احمر 122",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "23104",
            "name" => "ملون اسود 151",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "23105",
            "name" => "ملون ازرق مائي 133",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-3",
            "name" => "مواد الرولات",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "-301",
            "name" => "رولات 9غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30101",
            "name" => "رول وينر 9 غ برتقال",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30102",
            "name" => "رول وينر 9 غ منكا",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30103",
            "name" => "رول وينر 9 غ توت",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30104",
            "name" => "رول وينر 9 غ ليمون",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30105",
            "name" => "رول وينر 9 غ اناناس",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30106",
            "name" => "رول وينر 9 غ دراق",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30107",
            "name" => "رول وينر 9 غ تفاح احمر",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30108",
            "name" => "رول وينر 9 غ تفاح اخضر",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30109",
            "name" => "رول وينر 9 غ فريز",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30110",
            "name" => "رول وينر 9 غ فيمتو",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30111",
            "name" => "رول وينر 9 غ قمر الدين",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30112",
            "name" => "رول وينر 9 غ تمر هندي",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-302",
            "name" => "رولات 35 غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30201",
            "name" => "رول عمار 35 غ برتقال",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30202",
            "name" => "رول عمار 35 غ منكا",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30203",
            "name" => "رول عمار 35 غ توت",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30204",
            "name" => "رول عمار 35 غ ليمون",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30205",
            "name" => "رول عمار 35 غ اناناس",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30206",
            "name" => "رول عمار 35 غ دراق",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30207",
            "name" => "رول عمار 35 غ تفاح اخضر",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30208",
            "name" => "رول عمار 35 غ فريز",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30209",
            "name" => "رول عمار 35 غ فيمتو",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30210",
            "name" => "رول عمار 35 غ قمر الدين",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30211",
            "name" => "رول عمار 35 غ يوسفي",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-303",
            "name" => "رولات 35 غ اصبع",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30301",
            "name" => "رول عمار 35 غ اصبع برتقال",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30302",
            "name" => "رول عمار 35 غ اصبع منكا",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30303",
            "name" => "رول عمار 35 غ اصبع توت",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30304",
            "name" => "رول عمار 35 غ اصبع ليمون",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30305",
            "name" => "رول عمار 35 غ اصبع اناناس",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30306",
            "name" => "رول عمار 35 غ اصبع دراق",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30307",
            "name" => "رول عمار 35 غ اصبع تفاح اخضر",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30308",
            "name" => "رول عمار 35 غ اصبع فريز",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30309",
            "name" => "رول عمار 35 غ اصبع فيمتو",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30310",
            "name" => "رول عمار 35 غ اصبع برتقال وجزر",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30311",
            "name" => "رول عمار 35 غ اصبع يوسفي",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30312",
            "name" => "رول عمار 35 غ اصبع قمر الدين",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-304",
            "name" => "رولات الميلو",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30401",
            "name" => "رول وينر ظرف 20غ بني متلايز",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30402",
            "name" => "رول وينر ظرف 20غ بني قصدير",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30403",
            "name" => "رول الفائز ظرف 20غ اخضر متلايز",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30404",
            "name" => "رول الفائز ظرف 20غ اخضر قصدير",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30405",
            "name" => "رول متلايز فضي",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30406",
            "name" => "رول الفائز 400 غ قصدير",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30407",
            "name" => "رول الفائز 800 غ قصدير",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30408",
            "name" => "رول متلايز فضي راكد",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30409",
            "name" => "رول وينر 800غ قصدير",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-305",
            "name" => "رولات 3*1 وكابتشينو",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30501",
            "name" => "رول وينر كابتشينو متلايز",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30502",
            "name" => "رول وينر كابتشينو قصدير",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30503",
            "name" => "رول وينر 3*1 متلايز",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30504",
            "name" => "رول وينر 3*1 قصدير",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30505",
            "name" => "رول وينر 1/2",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30506",
            "name" => "رول وينر هوت شوكلت",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-306",
            "name" => "رولات سحلب",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30601",
            "name" => "رول وينر سحلب جوز هند",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30602",
            "name" => "رول وينر سحلب قرفة",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30603",
            "name" => "رول وينر سحلب مستكة",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-307",
            "name" => "رولات تغليف",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30701",
            "name" => "رول شرنك 60 سم",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30702",
            "name" => "رول شرنك 49.5 سم",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30703",
            "name" => "رول ستريتش",
            "unit1" => "صندوق",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-308",
            "name" => "رولات غير محلى",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30801",
            "name" => "رول عمار 10 غ غير محلى برتقال",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30802",
            "name" => "رول عمار 10 غ غير محلى منكا",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30803",
            "name" => "رول عمار 10 غ غير محلى توت",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30804",
            "name" => "رول عمار 10 غ غير محلى ليمون",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30805",
            "name" => "رول عمار 10 غ غير محلى فريز",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30806",
            "name" => "رول عمار 10 غ غير محلى توت راكد",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30807",
            "name" => "رول عمار 10 غ غير محلى فريز راكد",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-309",
            "name" => "رول شراب 650غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "30901",
            "name" => "رول عمار 650 غ برتقال",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30902",
            "name" => "رول عمار 650 غ منكا",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30903",
            "name" => "رول عمار 650 غ توت",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30904",
            "name" => "رول عمار 650 غ ليمون",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30905",
            "name" => "رول عمار 650 غ اناناس",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30906",
            "name" => "رول عمار 650 غ دراق",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30907",
            "name" => "رول عمار 650 غ تفاح اخضر",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30908",
            "name" => "رول عمار 650 غ فريز",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30909",
            "name" => "رول عمار 650 غ فيمتو",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30910",
            "name" => "رول عمار 650 غ يوسفي",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "30911",
            "name" => "رول عمار 650 غ قمر الدين",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-310",
            "name" => "رول 45 غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "31001",
            "name" => "رول عمار 45 غ برتقال",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "31002",
            "name" => "رول عمار 45 غ منكا",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "31003",
            "name" => "رول عمار 45 غ توت",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "31004",
            "name" => "رول عمار 45 غ ليمون",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "31005",
            "name" => "رول عمار 45 غ قمر الدين",
            "unit1" => "كغ ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-311",
            "name" => "رول 600 غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "31101",
            "name" => "رول عمار 600 غ برتقال",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "31102",
            "name" => "رول عمار 600 غ منكا",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "31103",
            "name" => "رول عمار 600 غ توت",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "31104",
            "name" => "رول عمار 600 غ ليمون",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "31105",
            "name" => "رول عمار 600 غ اناناس",
            "unit1" => "كغ",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-4",
            "name" => "الصناديق الخارجية",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "-401",
            "name" => "صناديق 35غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40101",
            "name" => "صندوق خارجي عمار 35 غ برتقال",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40102",
            "name" => "صندوق خارجي عمار 35 غ منكا",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40103",
            "name" => "صندوق خارجي عمار 35 غ توت",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40104",
            "name" => "صندوق خارجي عمار 35 غ ليمون",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40105",
            "name" => "صندوق خارجي عمار 35 غ اناناس",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40106",
            "name" => "صندوق خارجي عمار 35 غ تفاح",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40107",
            "name" => "صندوق خارجي عمار 35 غ قمر الدين",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-402",
            "name" => "صناديق 35غ اصبع",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40201",
            "name" => "صندوق خارجي عمار 35 غ اصبع برتقال",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40202",
            "name" => "صندوق خارجي عمار 35 غ اصبع منكا",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40203",
            "name" => "صندوق خارجي عمار 35 غ اصبع توت",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40204",
            "name" => "صندوق خارجي عمار 35 غ اصبع ليمون",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40205",
            "name" => "صندوق خارجي عمار 35 غ اصبع اناناس",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40206",
            "name" => "صندوق خارجي عمار 35 غ اصبع تفاح اخضر",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40207",
            "name" => "صندوق خارجي عمار 35 غ اصبع فريز",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40208",
            "name" => "صندوق خارجي عمار 35 غ اصبع فيمتو",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40209",
            "name" => "صندوق خارجي عمار 35 غ اصبع قمر الدين",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40210",
            "name" => "صندوق خارجي عمار 35 غ اصبع يوسفي",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40211",
            "name" => "صندوق خارجي عمار 35 غ اصبع دراق",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-403",
            "name" => "صناديق الميلو",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40301",
            "name" => "كرتون خارجي الفائز ظرف 20 غ",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40302",
            "name" => "كرتون خارجي الفائز ظرف 20 غ علب",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40303",
            "name" => "كرتون خارجي وينر ظرف 20 غ",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40304",
            "name" => "كرتون خارجي الفائز 400 غ",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40305",
            "name" => "كرتون الفائز خارجي 800 غ",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40306",
            "name" => "كرتون الفائز خارجي دكما",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40307",
            "name" => "كرتون وينر خارجي 800 غ",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-404",
            "name" => "صناديق 3*1 وكابتشينو",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40401",
            "name" => "صندوق خارجي وينر 3*1 علب",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40402",
            "name" => "صندوق خارجي وينر 3*1 مطربان",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40403",
            "name" => "صندوق خارجي كابتشينو كلاسيك",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-405",
            "name" => "صناديق السحلب",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40501",
            "name" => "صندوق خارجي سحلب وينر جوز هند",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40502",
            "name" => "صندوق خارجي سحلب وينر قرفة",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40503",
            "name" => "صندوق خارجي سحلب وينر مستكة",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-406",
            "name" => "صناديق الشوكولا",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40601",
            "name" => "صندوق خارجي وينر شوكولا 300 غ",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40602",
            "name" => "صندوق خارجي وينر شوكولا 700 غ",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-407",
            "name" => "صناديق 9غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40701",
            "name" => "صندوق خارجي وينر 9 غ ازرق",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-408",
            "name" => "صناديق 10غ غير محلى",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40801",
            "name" => "صندوق خارجي عمار غير محلى 10غ",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-409",
            "name" => "صناديق شراب 650غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "40901",
            "name" => "صندوق خارجي عمار 650 غ برتقال",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40902",
            "name" => "صندوق خارجي عمار 650 غ منكا",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40903",
            "name" => "صندوق خارجي عمار 650 غ توت",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40904",
            "name" => "صندوق خارجي عمار 650 غ ليمون",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40905",
            "name" => "صندوق خارجي عمار 650 غ اناناس",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40906",
            "name" => "صندوق خارجي عمار 650 غ تفاح",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40907",
            "name" => "صندوق خارجي عمار 650 غ دراق",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40908",
            "name" => "صندوق خارجي عمار 650 غ فريز",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40909",
            "name" => "صندوق خارجي عمار 650 غ فيمتو",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40910",
            "name" => "صندوق خارجي عمار 650 غ يوسفي",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40911",
            "name" => "صندوق خارجي عمار 650 غ قمر الدين",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40912",
            "name" => "صندوق خارجي عمار 650 غ ابيض",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40913",
            "name" => "صندوق خارجي عمار 600 غ اسمر",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40914",
            "name" => "كرتون خارجي عمار علب تنك",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "40915",
            "name" => "كرتون خارجي لزوم ترمس 35 غ اصبع",
            "unit1" => "كرتونة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-421",
            "name" => "صحون خارجية",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "42101",
            "name" => "صحن كرتون وينر علب + فائز علب",
            "unit1" => "قطعة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-5",
            "name" => "العلب والكليشات والأكياس",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "-501",
            "name" => "علب 9غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "50101",
            "name" => "علبة كرتون داخلي وينر 9 غ برتقال",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50102",
            "name" => "علبة كرتون داخلي وينر 9 غ منكا",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50103",
            "name" => "علبة كرتون داخلي وينر 9 غ توت",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50104",
            "name" => "علبة كرتون داخلي وينر 9 غ ليمون",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50105",
            "name" => "علبة كرتون داخلي وينر 9 غ اناناس",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50106",
            "name" => "علبة كرتون داخلي وينر 9 غ دراق",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50107",
            "name" => "علبة كرتون داخلي وينر 9 غ تفاح احمر",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50108",
            "name" => "علبة كرتون داخلي وينر 9 غ تفاح اخضر",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50109",
            "name" => "علبة كرتون داخلي وينر 9 غ فريز",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50110",
            "name" => "علبة كرتون داخلي وينر 9 غ فيمتو",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50111",
            "name" => "علبة كرتون داخلي وينر 9 غ قمر الدين",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50112",
            "name" => "علبة كرتون داخلي وينر 9 غ تمر هندي",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-502",
            "name" => "علب 35 غ",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "50201",
            "name" => "علبة كرتون داخلي عمار 35 غ برتقال",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50202",
            "name" => "علبة كرتون داخلي عمار 35 غ منكا",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50203",
            "name" => "علبة كرتون داخلي عمار 35 غ توت",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50204",
            "name" => "علبة كرتون داخلي عمار 35 غ ليمون",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50205",
            "name" => "علبة كرتون داخلي عمار 35 غ اناناس",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50206",
            "name" => "علبة كرتون داخلي عمار 35 غ قمر الدين",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-503",
            "name" => "علب 35 غ اصبع",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "50301",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع برتقال",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50302",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع منكا",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50303",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع توت",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50304",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع ليمون",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50305",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع اناناس",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50306",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع تفاح اخضر",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50307",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع دراق",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50308",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع فريز",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50309",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع فيمتو",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50310",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع يوسفي",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50311",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع قمر الدين",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50312",
            "name" => "علبة كرتون داخلي عمار 35 غ اصبع برتقال وجزر",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-504",
            "name" => "علب غير محلى",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "50401",
            "name" => "علبة كرتون داخلي عمار 10 غ غير محلى برتقال",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50402",
            "name" => "علبة كرتون داخلي عمار 10 غ غير محلى منكا",
            "unit1" => "علبة ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50403",
            "name" => "علبة كرتون داخلي عمار 10 غ غير محلى توت",
            "unit1" => "علبة ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50404",
            "name" => "علبة كرتون داخلي عمار 10 غ غير محلى ليمون",
            "unit1" => "علبة ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50405",
            "name" => "علبة كرتون داخلي عمار 10 غ غير محلى اناناس",
            "unit1" => "علبة ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50406",
            "name" => "علبة كرتون داخلي عمار 10 غ غير محلى فريز",
            "unit1" => "علبة ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50407",
            "name" => "علبة كرتون داخلي عمار 10 غ غير محلى توت راكد",
            "unit1" => "علبة ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50408",
            "name" => "علبة كرتون داخلي عمار 10 غ غير محلى فريزراكد",
            "unit1" => "علبة ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-505",
            "name" => "علب داخلية كابتشينو 3*1",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "50501",
            "name" => "علبة كرتون داخلي وينر كابتشينو كلاسيك",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50502",
            "name" => "علبة كرتون داخلي وينر 3*1",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50503",
            "name" => "علبة كرتون داخلي الفائز 20غ*12 ظرف",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-506",
            "name" => "علب السحلب الداخلية",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "50601",
            "name" => "علبة كرتون داخلي سحلب وينر جوز هند",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50602",
            "name" => "علبة كرتون داخلي سحلب وينر قرفة",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "50603",
            "name" => "علبة كرتون داخلي سحلب وينر مستكة",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-521",
            "name" => "علب البلاستيك",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "52101",
            "name" => "علبة بلاستيك وينر اي ام ال مع غطاء مكلشنة",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52102",
            "name" => "علبة بلاستيك الفائز اي ام ال مع غطاء مكلشنة",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52103",
            "name" => "علبة بلاستيك شوكولا وينر 300 غ",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52104",
            "name" => "علبة بلاستيك شوكولا وينر 700 غ",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52105",
            "name" => "غطاء علبة شوكولا وينر",
            "unit1" => "غطاء",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52106",
            "name" => "مطربان شفاف مضلع وينر 3*1",
            "unit1" => "مطربان",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52107",
            "name" => "علبة بلاستيك شراب عمار 2 كغ برتقال",
            "unit1" => "علبة",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52108",
            "name" => "علبة بلاستيك شراب عمار 2 كغ منكا",
            "unit1" => "علبة",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52109",
            "name" => "علبة بلاستيك شراب عمار 2 كغ توت",
            "unit1" => "علبة",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52110",
            "name" => "علبة بلاستيك شراب عمار 2 كغ ليمون",
            "unit1" => "علبة",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52111",
            "name" => "علبة بلاستيك شراب عمار 2 كغ اناناس",
            "unit1" => "علبة",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52112",
            "name" => "علبة بلاستيك شراب عمار 2 كغ دراق",
            "unit1" => "علبة",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52113",
            "name" => "غطاء علبة شراب عمار 2 كغ بلاستيك اخضر",
            "unit1" => "كغ",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "52114",
            "name" => "علبة بلاستيك وينر اي ام ال بدون غطاء لبنان",
            "unit1" => "علبة",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-531",
            "name" => "الكليشات",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "53101",
            "name" => "كليشات وينر 3*1 مطربان",
            "unit1" => "طقم ستيكر",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53102",
            "name" => "كليشات شوكولا وينر 300 غ محيط",
            "unit1" => "لصاقة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53103",
            "name" => "كليشات شوكولا وينر غطاء",
            "unit1" => "لصاقة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53104",
            "name" => "كليشات شوكولا وينر 700 غ محيط",
            "unit1" => "لصاقة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53105",
            "name" => "كليشات شوكولا وينر 700 غ غطاء",
            "unit1" => "كليشة",
            "unit2" => "ربطة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53106",
            "name" => "لصاقة علبة 2 كغ شراب عمار برتقال",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53107",
            "name" => "لصاقة علبة 2 كغ شراب عمار منكا",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53108",
            "name" => "لصاقة علبة 2 كغ شراب عمار توت",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53109",
            "name" => "لصاقة علبة 2 كغ شراب عمار ليمون",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53110",
            "name" => "لصاقة علبة 2 كغ شراب عمار اناناس",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53111",
            "name" => "لصاقة علبة 2 كغ شراب عمار دراق",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53112",
            "name" => "لصاقة علبة 2 كغ شراب عمار تفاح اخضر",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53113",
            "name" => "لصاقة علبة 2 كغ شراب عمار فريز",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53114",
            "name" => "لصاقة علبة 2 كغ شراب عمار فيمتو",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53115",
            "name" => "لصاقة علبة 2 كغ شراب عمار يوسفي",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "53116",
            "name" => "لصاقة علبة 2 كغ شراب عمار قمر الدين",
            "unit1" => "طقم ستيكر",
            "unit2" => "رول",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-551",
            "name" => "الأكياس",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "55101",
            "name" => "أكياس نايلون 30 *30 سم",
            "unit1" => "كغ",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "55102",
            "name" => "أكياس نايلون الفائز دكما",
            "unit1" => "كغ",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "55103",
            "name" => "أكياس نايلون كابتشينو وينر دكما",
            "unit1" => "كغ",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "55104",
            "name" => "أكياس نايلون 3*1 وينر دكما",
            "unit1" => "كغ",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "55105",
            "name" => "أكياس نايلون لزوم شراب 650 غ",
            "unit1" => "كغ",
            "unit2" => "كيس",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "55106",
            "name" => "أكياس شرنك تغليف 10 غ غير محلى",
            "unit1" => "كغ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-591",
            "name" => "مواد متفرقة",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "59101",
            "name" => "لزيق شفاف عريض",
            "unit1" => "صندوق",
            "unit2" => "قطعة ",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "59111",
            "name" => "أكياس شنتة دعاية",
            "unit1" => "كغ",
            "unit2" => "كرتونة",
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-6",
            "name" => "مواد مختلفة لزوم الانتاج",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "-601",
            "name" => "السكر والميلو الجاهز للتصنيع",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "60101",
            "name" => "سكر",
            "unit1" => "كغ",
            "unit2" => "شوال",
            "factor2" => 50,
            "unit3"=> "طن",
            "factor3" => 1000
        ],
        [
            "code" => "60121",
            "name" => "ميلو جاهز",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "60122",
            "name" => "ميلو جاهز مع مبيض",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-641",
            "name" => "مواد ومستلزمات الطباعة",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "64101",
            "name" => "حبر سائل",
            "unit1" => "لنر",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "64102",
            "name" => "مذيب حبر",
            "unit1" => "لتر",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "64103",
            "name" => "سائل غسيل الطابعة",
            "unit1" => "لتر",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "64104",
            "name" => "اسيتون",
            "unit1" => "كغ ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "64105",
            "name" => "قطع قماش لزوم تنظيف",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "64106",
            "name" => "معلقات وينر",
            "unit1" => "قطعة",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-651",
            "name" => "مواد تنظيف",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "65101",
            "name" => "كلور",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "65102",
            "name" => "سائل جلي",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "65103",
            "name" => "مواد تنظيف مختلفة",
            "unit1" => "كغ",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-671",
            "name" => "المحروقات",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "67101",
            "name" => "مازوت",
            "unit1" => "ليتر",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "67102",
            "name" => "بنزين",
            "unit1" => "ليتر",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "67103",
            "name" => "فيول",
            "unit1" => "ليتر",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "67104",
            "name" => "غاز",
            "unit1" => "ليتر",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "67105",
            "name" => "زيت لزوم المولدة",
            "unit1" => "ليتر",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "-681",
            "name" => "مستلزمات الانتاج",
            "unit1" => null,
            "unit2" => null,
            "factor2" => null,
            "unit3"=> null,
            "factor3" => null
        ],
        [
            "code" => "68101",
            "name" => "طبالي",
            "unit1" => "قطعة",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "68102",
            "name" => "سلل بلاستيك",
            "unit1" => "قطعة",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "68103",
            "name" => "سطل بلاستيك",
            "unit1" => "قطعة",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "68104",
            "name" => "غربال",
            "unit1" => "قطعة",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "68105",
            "name" => "خيطان تربيط",
            "unit1" => "قطعة",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "68106",
            "name" => "كفوف مطاط",
            "unit1" => "علبة",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "68107",
            "name" => "طاقية",
            "unit1" => "طاقية",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "68108",
            "name" => "كنزة صيفي تيشرت",
            "unit1" => "تيشرت",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ],
        [
            "code" => "68109",
            "name" => "سجادة صلاة",
            "unit1" => "سجادة",
            "unit2" => null,
            "factor2" => 0,
            "unit3"=> null,
            "factor3" => 0
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $data = [
//            "1000"=>
//                [
//                'شراب وينر ظرف 9 غ محلى' ,
//                'شراب عمار ظرف 35 غ اصبع',
//                'شراب عمار ظرف 35 غ مربع',
//                'شراب عمار 650 غ',
//                'شراب عمار 2 كغ علبة بلاستيك',
//                'شراب محلى وينر دكما',
//                'شراب عادي عمار دكما',
//                'شراب عمار 10غ غير محلى'
//                ],
//            "1010"=>[
//                "ميلو وينر علبة بلاستيك 200 غ",
//                "ميلو وينر ظرف 25 غ",
//                "ميلو الفائز علبة بلاستيك 250 غ",
//                "ميلو الفائز ظرف 20غ",
//                "ميلو الفائز ظرف 20 غ * 12 علبة",
//                "ميلو الفائز دكما",
//                "ميلو الفائز فرط",
//                "ميلو الفائز 400 غ",
//                "ميلو الفائز 800 غ",
//                "ميلو وينر علبة بلاستيك 250 غ",
//                "ميلو وينر ظرف 20 غ",
//                "ميلو وينر 800غ",
//
//            ],
//            "1020"=>[
//                "كابتشينو وينر علب",
//                "وينر 3*1 علب",
//                "وينر 3*1 مطربان"
//            ],
//            "1030"=>[
//                "سحلب وينر"
//            ],
//            "1040"=>[
//                "شوكولا وينر 300 غ",
//                "شوكولا وينر 700 غ",
//                "شوكولا وينر دكما",
//            ]
//
//        ] ;
//
//        foreach ($data as $code => $names){
//            $code_id =1;
//            $category_id =1;
//            foreach ($names as $name){
//                $item = new Item();
//                $item->name = $name;
//                $item->code = $code.$code_id++;
//                $item->description = $name;
//                $item->item_category_id = $category_id;
//                $item->unit = 'ظرف';
//                $item->save();
//
//                $item->units()->saveMany([
//                    new ItemUnit(['name' => 'علبة' , 'conversion_factor'=>12]),
//                    new ItemUnit(['name' => 'طرد' , 'conversion_factor'=>100]),
//                ]);
//
//            }
//            $category_id++;
//        }
//
//
//        $item = new Item();
//        $item->name = '1هوت شوكليت';
//        $item->code = '1263';
//        $item->description = '$name';
//        $item->item_category_id = 6;
//        $item->unit = 'ظرف';
//        $item->save();
//
//        $item = new Item();
//        $item->name = '2هوت شوكليت';
//        $item->code = '1253';
//        $item->description = '$name';
//        $item->item_category_id = 7;
//        $item->unit = 'ظرف';
//        $item->save();
//
//        $item = new Item();
//        $item->name = '3هوت شوكليت';
//        $item->code = '1233';
//        $item->description = '$name';
//        $item->item_category_id = 8;
//        $item->unit = 'ظرف';
//        $item->save();
//
//        $item = new Item();
//        $item->name = '4هوت شوكلي';
//        $item->code = '1234';
//        $item->description = '$name';
//        $item->item_category_id = 9;
//        $item->unit = 'ظرف';
//        $item->save();


        $items = ItemSeeder::$items;
        $itemMainCategory = null;
        $itemCategory = null;

        foreach ($items as $item){

            $code = $item['code'];
            $name = $item['name'];

            $unit1 = $item['unit1'];
            $unit2 = $item['unit2'];
            $unit3 = $item['unit3'];
            $factor2 = $item['factor2'];
            $factor3 = $item['factor3'];


            $intCode = intval($code);

            //Category
            if($intCode < 0 ){
                //ItemMainCategory
                if($intCode > -10){

                    $itemMainCategory = new \App\Models\ItemMainCategory();
                    $itemMainCategory->name = $name;
                    $itemMainCategory->code = $code;
                    $itemMainCategory->department_id = null;
                    $itemMainCategory->save();
                }

                //ItemCategory
                else{

                    $itemCategory = new \App\Models\ItemCategory();
                    $itemCategory->name = $name;
                    $itemCategory->code = $code;
                    $itemCategory->item_main_category_id = $itemMainCategory->id;
                    $itemCategory->save();

                }


            }else{

                $newItem = new \App\Models\Item();
                $newItem->name = $name;
                $newItem->code = $code;
//                $newItem->description = $name;
                $newItem->item_category_id = $itemCategory->id;
                $newItem->unit = $unit1;
                $newItem->save();

                if($unit2){
                    $newItem->units()->saveMany([
                        new \App\Models\ItemUnit(['name' => $unit2 , 'conversion_factor'=>$factor2]),
                    ]);
                }
                if($unit3){
                    $newItem->units()->saveMany([
                        new \App\Models\ItemUnit(['name' => $unit3 , 'conversion_factor'=>$factor3]),
                    ]);
                }
            }



        }


    }
}
