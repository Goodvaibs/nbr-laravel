<?php

namespace App\Http\Controllers;
use App\Models\Form;
use DB;


use Illuminate\Http\Request;

class FormController extends Controller
{
    //apply record
    public function applyRecord(Request $request) {
        try {
            $data = $request->all();
            $category = new Form();
            $resp = $category->applyRecord($data);
            if($resp) {
                $message = config('constants.MESSAGE.APPLY_RECORD_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, null, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_APPLY_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }

    }

    //report record
    public function reportRecord(Request $request) {
        try {
            $data = $request->all();
            $category = new Form();
            $resp = $category->reportRecord($data);
            if($resp) {
                $message = config('constants.MESSAGE.REPORT_RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, null, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_REPORT_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //invite umpire
    public function inviteUmpire(Request $request) {
        try {
            $data = $request->all();
            $category = new Form();
            $resp = $category->inviteUmpire($data);
            if($resp) {
                $message = config('constants.MESSAGE.INVITE_UMPIRE_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, null, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_INVITE_UMPIRE_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //Priority application
    public function priorityApps(Request $request) {
        try {
            $data = $request->all();
            $category = new Form();
            $resp = $category->priorityApps($data);
            if($resp) {
                $message = config('constants.MESSAGE.PRIORITY_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, null, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_PRIORITY_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //get apply records
    public function getApplyRecord() {
        try {
            $category = new Form();
            $resp = $category->getApplyRecord();
            if($resp) {
                $message = config('constants.MESSAGE.RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, $resp, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //get apply record by id
    public function getApplyRecordById($id) {
        try {
            $category = new Form();
            $resp = $category->getApplyRecordById($id);
            if($resp) {
                $message = config('constants.MESSAGE.RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, $resp, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //delete apply record by id
    public function deleteApplyRecord($id) {
        try {
            $category = new Form();
            $resp = $category->deleteApplyRecord($id);
            if($resp) {
                $message = config('constants.MESSAGE.REP_DELETED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, null, $message, $code);
            } else {
                $message = config('constants.MESSAGE.REP_NOT_DELETED');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //get invite umpire
    public function getInviteUmpire() {
        try {
            $category = new Form();
            $resp = $category->getInviteUmpire();
            if($resp) {
                $message = config('constants.MESSAGE.RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, $resp, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //get invite by id
    public function getInviteUmpireById($id) {
        try {
            $category = new Form();
            $resp = $category->getInviteUmpireById($id);
            if($resp) {
                $message = config('constants.MESSAGE.RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, $resp, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //delete invite umpire by id
    public function deleteUmpire($id) {
        try {
            $category = new Form();
            $resp = $category->deleteUmpire($id);
            if($resp) {
                $message = config('constants.MESSAGE.UMPIRE_DELETE');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, null, $message, $code);
            } else {
                $message = config('constants.MESSAGE.UMPIRE_NOT_DELETE');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

     //get report
     public function getReportRecord() {
        try {
            $category = new Form();
            $resp = $category->getReportRecord();
            if($resp) {
                $message = config('constants.MESSAGE.RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, $resp, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //get report record by id
    public function getReportRecordById($id) {
        try {
            $category = new Form();
            $resp = $category->getReportRecordById($id);
            if($resp) {
                $message = config('constants.MESSAGE.RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, $resp, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //delete report record by id
    public function deleteReportRecord($id) {
        try {
            $category = new Form();
            $resp = $category->deleteReportRecord($id);
            if($resp) {
                $message = config('constants.MESSAGE.REP_DELETED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, null, $message, $code);
            } else {
                $message = config('constants.MESSAGE.REP_NOT_DELETED');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

     //get priority
     public function getPriorityApp() {
        try {
            $category = new Form();
            $resp = $category->getPriorityApp();
            if($resp) {
                $message = config('constants.MESSAGE.RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, $resp, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //get priority app by id
    public function getPriorityAppById($id) {
        try {
            $category = new Form();
            $resp = $category->getPriorityAppById($id);
            if($resp) {
                $message = config('constants.MESSAGE.RECORDS_ADDED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, $resp, $message, $code);
            } else {
                $message = config('constants.MESSAGE.FAILED_RECORDS_ADD');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    //delete report record by id
    public function deletePriorityApp($id) {
        try {
            $category = new Form();
            $resp = $category->deletePriorityApp($id);
            if($resp) {
                $message = config('constants.MESSAGE.PRIOR_DELETED');
                $code = config('constants.ERROR.CODE.OK'); // Ok
                return jsonResponse(true, null, $message, $code);
            } else {
                $message = config('constants.MESSAGE.PRIOR_NOT_DELETED');
                $code = config('constants.ERROR.CODE.BAD_REQUEST'); // Ok
                return jsonResponse(false, null, $message, $code);
            }
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }

    public function getCountsHomePage() {
        try {
            $category = new Form();
            $resp = $category->getCounts();
            $message = config('constants.MESSAGE.DATA_FETCHED');
            $code = config('constants.ERROR.CODE.OK'); // Ok
            return jsonResponse(true, $resp, $message, $code);
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            $code = $ex->getCode();
            return jsonResponse(false, null, $message, $code);
        } catch (QueryException $e) {
            $message = $e->getMessage();
            $code = 400;
            return jsonResponse(false, null, $message, $code);
        }
    }
}
