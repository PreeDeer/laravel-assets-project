@extends('_layouts.main')
@section('contents')

<h1 class="font-bold">เพิ่มครุภัณฑ์</h1>
<div>
    <div class="p-8 max-w-md">
        <form action="">
            <div class="flex flex-col gap-2">
                <label for="">ชื่อรายการครุภัณฑ์</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="ชื่อรายการ">
                <label for="">จำนวนทั้งหมด</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="0000">
                <label for="">รหัส-ปี</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="00">
                <label for="">รหัส-คณะ</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="00">
                <label for="">รหัส-ประเภท</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="00">
                <label for="">รหัส-ประเภทย่อย</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="000">

                <label for="">วันที่สั่งซื้อ</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="00/00/0000">
                <label for="">ปีงบประมาณ</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="0000">
                <label for="">ราคา/หน่วย</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="0000.00">
                <label for="">วิธีการได้รับมา</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="สอบราคา">
            </div>

            <div class="flex gap-4 space-x-2.5 my-2">
                <label for="">สถานที่ใช้</label>
            <select name="" id="" class="rounded p-2 border border-gray-300">
                <option value="">เลือกห้องที่ใช้งาน</option>
                <option value="6402">6402</option>
                <option value="floor_5">ชั้น 5</option>
                <option value="floor_6">ชั้น 6</option>
            </select>
            <label for="">อาคาร</label>
            <select name="" id="" class="rounded p-2 border border-gray-30">
                <option value="">-</option>
                <option value="6">6</option>
                <option value="9">9</option>
                <option value="none">-</option>
            </select>
            </div>

            <div class="flex flex-col gap-2 my-2">
                <label for="">หมายเหตุ</label>
                <input type="text" class="rounded p-2 border border-gray-300" placeholder="เงินรายได้">
            </div>

            <button class="w-full p-2.5 bg-sky-500 text-white hover:bg-sky-700">
                เพิ่มผู้ใช้งาน
            </button>
        </form>
    </div></div>

@stop