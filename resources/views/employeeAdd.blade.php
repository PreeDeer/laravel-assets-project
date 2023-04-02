@extends('_layouts.main')
@section('contents')
<h1 class="font-bold">เพิ่มผู้ใช้งาน</h1>
<div class="p-8 max-w-md">
    <form action="">
        <div class="flex flex-col gap-2">
            <label for="">Username</label>
            <input type="text" class="rounded p-2 border border-gray-300" placeholder="ใส่ชื่อผู้ใช้งาน">
            <label for="">อีเมลล์</label>
            <input type="text" class="rounded p-2 border border-gray-300" placeholder="ใส่อีเมลล์ผู้ใช้งาน">
            <label for="">ชื่อ-นามสกุล</label>
            <input type="text" class="rounded p-2 border border-gray-300" placeholder="ใส่ชื่อ-นามสกุล">
        </div>
        <div class="flex gap-4 space-x-2.5 my-2">
            <label for="">ห้องที่ดูแล</label>
        <select name="" id="" class="rounded p-2 border border-gray-300">
            <option value="">เลือกห้องที่ดูแล</option>
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
            <label for="">เบอร์โทรศัพท์</label>
            <input type="text" class="rounded p-2 border border-gray-300" placeholder="เบอร์โทรศัพท์ เช่น 0xxxxxxxxx">
        </div>

        <button class="w-full p-2.5 bg-sky-500 text-white hover:bg-sky-700">
            เพิ่มผู้ใช้งาน
        </button>
    </form>
</div>

@stop