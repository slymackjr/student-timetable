<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeModel extends Model
{
    use HasFactory;

    public function __construct(){

    }

    public function showNotices()
    {
        return Notice::orderBy('start_date', 'desc')->get();
    }

    public function createNewNotice($notice_message,$due_date)
    {
         // Insert the new record.
         $notice = new Notice();
         $notice->setAttribute('notice_message', $notice_message);
         $notice->setAttribute('due_date', $due_date);    
         $success = $notice->save();
     
         if ($success) {
             return true;
         }
     
         session()->flash('success_message', 'Notice creation failed.');
         return false;
    }

    public function deleteNotice($notice_id)
    {
        // Find the record to delete
    $notice = Notice::find($notice_id);

    if (!$notice) {
        // Handle the case where the record is not found
        // You can redirect back with an error message or take appropriate action
        //session()->flash('success', 'notice not found.');
        return false;
    }
    // Delete the record
    $deleted = $notice->delete();

    if ($deleted) {
        session()->flash('success', 'notice deleted successfully.');
        return true;
    } else {
        session()->flash('success', 'Failed to delete notice.');
        return false;
    }
    }
}
