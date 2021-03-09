<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;


class Form extends Model
{
    //Apply record
    public function applyRecord($data) {

        $insert_data = array(
            "first_name" => $data['first_name'],
            "last_name" => $data['last_name'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "age" => $data['age'],
            "gender" => $data['gender'],
            "record_category" => $data['record_category'],
            "record_name" => $data['record_name'],
            "video_link" => $data['video_link'],
            "web_link" => $data['web_link'],
            "record_description" => $data['record_description'],
            "additional_detail" => $data['additional_detail']
        );

        if(!empty($data['image'])) {#upload title image
            $filename = 'Setrecord-image-' . time() . '.' . $data['image']->getClientOriginalExtension();
            $path = $data['image']->storeAs('public/Uploads/Setrecord',$filename);
            $insert_data['image'] = $filename;
        }

        if(!empty($data['video'])) {#upload title image
            $filename = 'Setrecord-image-' . time() . '.' . $data['video']->getClientOriginalExtension();
            $path = $data['video']->storeAs('public/Uploads/Setrecord',$filename);
            $insert_data['video'] = $filename;
        }

        $data['id'] = DB::table('apply_record')->insertGetId($insert_data);

        if(!empty($data['id'])) {
            DB::commit();
            return $data['id'];
        } else {
            DB::rollBack();
            return null;
        }
    }

    // invite umpire
    public function inviteUmpire($data) {

        $insert_data = array(
            "first_name" => $data['first_name'],
            "last_name" => $data['last_name'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "age" => $data['age'],
            "gender" => $data['gender'],
            "umpire_detail" => $data['umpire_detail'],
            "additional_detail" => $data['additional_detail'],
        );

        $data['id'] = DB::table('invite_umpire')->insertGetId($insert_data);

        if(!empty($data['id'])) {
            DB::commit();
            return $data['id'];
        } else {
            DB::rollBack();
            return null;
        }
    }

    //report record
    public function reportRecord($data) {

        $insert_data = array(
            "first_name" => $data['first_name'],
            "last_name" => $data['last_name'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "age" => $data['age'],
            "gender" => $data['gender'],
            "record_first_name" => $data['record_first_name'],
            "record_last_name" => $data['record_last_name'],
            "record_email" => $data['record_email'],
            "record_phone" => $data['record_phone'],
            "record_age" => $data['record_age'],
            "record_gender" => $data['record_gender'],
            "record_category" => $data['record_category'],
            "record_name" => $data['record_name'],
            "video_link" => $data['video_link'],
            "web_link" => $data['web_link'],
            "record_description" => $data['record_description'],
            "additional_detail" => $data['additional_detail']
        );

        if(!empty($data['image'])) {#upload title image
            $filename = 'Setrecord-image-' . time() . '.' . $data['image']->getClientOriginalExtension();
            $path = $data['image']->storeAs('public/Uploads/Setrecord',$filename);
            $insert_data['image'] = $filename;
        }

        if(!empty($data['video'])) {#upload title image
            $filename = 'Setrecord-video-' . time() . '.' . $data['video']->getClientOriginalExtension();
            $path = $data['video']->storeAs('public/Uploads/Setrecord',$filename);
            $insert_data['video'] = $filename;
        }

        $data['id'] = DB::table('report_record')->insertGetId($insert_data);

        if(!empty($data['id'])) {
            DB::commit();
            return $data['id'];
        } else {
            DB::rollBack();
            return null;
        }
    }

    // priority application
    public function priorityApps($data) {

        $insert_data = array(
            "first_name" => $data['first_name'],
            "last_name" => $data['last_name'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "age" => $data['age'],
            "gender" => $data['gender']
        );

        $data['id'] = DB::table('priority_apps')->insertGetId($insert_data);

        if(!empty($data['id'])) {
            DB::commit();
            return $data['id'];
        } else {
            DB::rollBack();
            return null;
        }
    }

    //apply record
    public function getApplyRecord() {
        return DB::table('apply_record')->where('is_deleted', false)->get();
    }

    public function getApplyRecordById($id) {
        $record = DB::table('apply_record')->where('id', $id)->where('is_deleted', false)->first();
        if(!empty($record)) {
            if(!empty($record->image)){
                $record->image = asset('public/storage/Uploads/Setrecord'.$record->image);
            }
            if(!empty($v->video)){
                $record->video = asset('public/storage/Uploads/Setrecord'.$record->video);
            }
        } else {
            $record = [];
        }

        return $record;
    }

    public function deleteApplyRecord($id) {
        return DB::table('apply_record')->where('id', $id)->update(['is_deleted' => true]);
    }

    //invite umpire
    public function getInviteUmpire() {
        return DB::table('invite_umpire')->where('is_deleted', false)->get();
    }

    public function getInviteUmpireById($id) {
        return DB::table('invite_umpire')->where('id', $id)->where('is_deleted', false)->first();
    }

    public function deleteUmpire($id) {
        return DB::table('invite_umpire')->where('id', $id)->update(['is_deleted' => true]);
    }

    //report record
    public function getReportRecord() {
        return DB::table('report_record')->where('is_deleted', false)->get();
    }

    public function getReportRecordById($id) {
        $record = DB::table('report_record')->where('id', $id)->where('is_deleted', false)->first();
        if(!empty($record)) {
            if(!empty($record->image)){
                $record->image = asset('public/storage/Uploads/Setrecord'.$record->image);
            }
            if(!empty($v->video)){
                $record->video = asset('public/storage/Uploads/Setrecord'.$record->video);
            }
        } else {
            $record = [];
        }

        return $record;
    }

    public function deleteReportRecord($id) {
        return DB::table('report_record')->where('id', $id)->update(['is_deleted' => true]);
    }
    //priority app
    public function getPriorityApp() {
        return DB::table('priority_apps')->where('is_deleted', false)->get();
    }

    public function getPriorityAppById($id) {
        return DB::table('priority_apps')->where('id', $id)->where('is_deleted', false)->first();
    }

    public function deletePriorityApp($id) {
        return DB::table('priority_apps')->where('id', $id)->update(['is_deleted' => true]);
    }

    //get counts for home page
    public function getCounts() {
        $result = array();

        $result['records'] = DB::table('records')->where('is_deleted', false)->count();
        $result['apply_record'] = DB::table('apply_record')->where('is_deleted', false)->count();
        $result['priority_apps'] = DB::table('priority_apps')->where('is_deleted', false)->count();
        $result['invite_umpire'] = DB::table('invite_umpire')->where('is_deleted', false)->count();
        $result['report_record'] = DB::table('report_record')->where('is_deleted', false)->count();

        return $result;
    }
}
