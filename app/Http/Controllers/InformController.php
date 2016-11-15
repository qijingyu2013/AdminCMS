<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Inform;
use Illuminate\Http\Request;
use Input;

class InformController extends Controller
{
    /**
     * columnId
     * 1 = dtinform 交易动态
     * 2 = teaknowledge 茶知识
     * 3 =
     * 4 =
     * 5 =
     *
     *
     */
    //交易动态
    const dtinform = 1;
    //茶知识
    const teaknowledge = 2;
    //茶文化
    const teaculture = 3;
    //茶藏品
    const teacollection = 4;

    /* 交易动态 start */
    /**
     * Get all Dt informs.
     *
     * @return JSON
     */
    public function getDtinforms(){
        $dtinforms = Inform::where('columnId', '=', self::dtinform)->get();
        return response()->success(compact('dtinforms'));
    }

    /**
     * Create new dt inform.
     *
     * @return JSON
     */
    public function postDtinforms()
    {
        $dtinform = Inform::create([
            'title' => Input::get('title'),
            'content' => Input::get('content'),
            'columnId' => self::dtinform
        ]);

        return response()->success(compact('dtinform'));
    }

    /**
     * Get system Dtinform referenced by id.
     *
     * @param int Dtinform ID
     *
     * @return JSON
     */
    public function getDtinformsShow($id)
    {
        $dtinform = Inform::find($id);

        return response()->success($dtinform);
    }

    /**
     * Update system Dtinform.
     *
     * @return JSON
     */
    public function putDtinformsShow()
    {
        $informForm = Input::get('data');
        $affectedRows = Inform::where('id', '=', intval($informForm['id']))->update($informForm);
        if($affectedRows>0){
            return response()->success($informForm);
        }else{
            return response()->error($informForm);
        }
    }

    /**
     * Delete system Dtinform referenced by id.
     *
     * @param int Dtinform ID
     *
     * @return JSON
     */
    public function deleteDtinforms($id)
    {
        Inform::destroy($id);

        return response()->success('success');
    }
    /* 交易动态 end */

    /* 关于茶 start */
    /* 茶知识 start */
    /**
     * Get all Teaknowledge.
     *
     * @return JSON
     */
    public function getTeaKnowledges(){
        $teaknowledges = Inform::where('columnId', '=', self::teaknowledge)->get();
        return response()->success(compact('teaknowledges'));
    }

    /**
     * Create new Teaknowledge.
     *
     * @return JSON
     */
    public function postTeaKnowledges()
    {
        $teaknowledge = Inform::create([
            'title' => Input::get('title'),
            'content' => Input::get('content'),
            'columnId' => self::teaknowledge
        ]);

        return response()->success(compact('teaknowledge'));
    }

    /**
     * Get system Teaknowledge referenced by id.
     *
     * @param int Teaknowledge ID
     *
     * @return JSON
     */
    public function getTeaKnowledgesShow($id)
    {
        $teaknowledge = Inform::find($id);

        return response()->success($teaknowledge);
    }

    /**
     * Update system Teaknowledge.
     *
     * @return JSON
     */
    public function putTeaknowledgesShow()
    {
        $teaknowledgeForm = Input::get('data');
        $affectedRows = Inform::where('id', '=', intval($teaknowledgeForm['id']))->update($teaknowledgeForm);
        if($affectedRows>0){
            return response()->success($teaknowledgeForm);
        }else{
            return response()->error($teaknowledgeForm);
        }
    }

    /**
     * Delete system Teaknowledge referenced by id.
     *
     * @param int Teaknowledge ID
     *
     * @return JSON
     */
    public function deleteTeaknowledges($id)
    {
        Inform::destroy($id);

        return response()->success('success');
    }
    /* 茶知识 end */
    /* 茶文化 start */
    /**
     * Get all TeaCultures.
     *
     * @return JSON
     */
    public function getTeaCultures(){
        $teacultures = Inform::where('columnId', '=', self::teaculture)->get();
        return response()->success(compact('teacultures'));
    }

    /**
     * Create new TeaCulture.
     *
     * @return JSON
     */
    public function postTeaCultures()
    {
        $teaculture = Inform::create([
            'title' => Input::get('title'),
            'content' => Input::get('content'),
            'columnId' => self::teaculture
        ]);

        return response()->success(compact('teaculture'));
    }

    /**
     * Get system TeaCulture referenced by id.
     *
     * @param int TeaCulture ID
     *
     * @return JSON
     */
    public function getTeaCulturesShow($id)
    {
        $teaculture = Inform::find($id);

        return response()->success($teaculture);
    }

    /**
     * Update system TeaCulture.
     *
     * @return JSON
     */
    public function putTeaCulturesShow()
    {
        $teacultureForm = Input::get('data');
        $affectedRows = Inform::where('id', '=', intval($teacultureForm['id']))->update($teacultureForm);
        if($affectedRows>0){
            return response()->success($teacultureForm);
        }else{
            return response()->error($teacultureForm);
        }
    }

    /**
     * Delete system TeaCulture referenced by id.
     *
     * @param int TeaCulture ID
     *
     * @return JSON
     */
    public function deleteTeaCultures($id)
    {
        Inform::destroy($id);

        return response()->success('success');
    }
    /* 茶文化 end */
    /* 关于茶 end */

    /* 藏品展示 start */
    /**
     * Get all TeaCultures.
     *
     * @return JSON
     */
    public function getTeaCollections(){
        $teacollections = Inform::where('columnId', '=', 4)->get();
        return response()->success(compact('teacollections'));
    }

    /**
     * Create new TeaCulture.
     *
     * @return JSON
     */
    public function postTeaCollections()
    {
        $teacollection = Inform::create([
            'title' => Input::get('title'),
            'content' => Input::get('content'),
            'columnId' => 4
        ]);

        return response()->success(compact('teacollection'));
    }

    /**
     * Get system TeaCulture referenced by id.
     *
     * @param int TeaCulture ID
     *
     * @return JSON
     */
    public function getTeaCollectionsShow($id)
    {
        $teacollection = Inform::find($id);

        return response()->success($teacollection);
    }

    /**
     * Update system TeaCulture.
     *
     * @return JSON
     */
    public function putTeaCollectionsShow()
    {
        $teacollectionForm = Input::get('data');
        $affectedRows = Inform::where('id', '=', intval($teacollectionForm['id']))->update($teacollectionForm);
        if($affectedRows>0){
            return response()->success($teacollectionForm);
        }else{
            return response()->error($teacollectionForm);
        }
    }

    /**
     * Delete system TeaCulture referenced by id.
     *
     * @param int TeaCulture ID
     *
     * @return JSON
     */
    public function deleteTeaCollections($id)
    {
        Inform::destroy($id);

        return response()->success('success');
    }
    /* 藏品展示 end */
}
