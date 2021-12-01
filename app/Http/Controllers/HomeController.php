<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Packhub\Pack;

use URL;

class HomeController extends Controller
{


    private $pack;


    public function __construct(Pack $pack){
        $this->pack = $pack;
    }


     /***
	 * Function Name: index
	 * Description: To print all the products from the packhub
	 * params: 
	 * return: return view for the homepage
	 * Created On: 30-Nov 2021
	 */

     public function index(){

        $bookData = '';

        $result = $this->pack->getAPI('api/v1/products?limit=8&page=1');

        if($result !== null){
            $bookData = $result;
        }

        return view('packHome',compact('bookData'));

     }

    /***
	 * Function Name: getRecords
	 * Description: Pagination records using ajax
	 * params: 
	 * return: Ajax request response
	 * Created On: 30-Nov 2021
	 */

    public function getRecords($page,Request $request){


        if ($request->ajax()) {
            $html = '';
            $result = $this->pack->getAPI('api/v1/products?limit=8&page='.$page);

            foreach ($result->products as $book) {
                $html.='<div class = "col-md-3"> <h3>'.$book->title .'</h3><a href= /getRecordDetails/'.$book->id.'><button type = "button" class = "btn btn-info">Browse</button></a></div>';
            }

            return $html;
        }

        return $this->index();

    }

     /***
	 * Function Name: getRecordDetails
	 * Description: Get single record details
	 * params: 
	 * return: return view for the homepage
	 * Created On: 30-Nov 2021
	 */

    public function getRecordDetails($id,Request $request){


        if (!empty($id)) {
            $html = '';
            $bookDetail = $this->pack->getAPI('api/v1/products/'.$id);   
            return view('bookDetail',compact('bookDetail'));
        }

        return $this->index();

    }
}
