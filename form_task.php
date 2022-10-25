<?php
    $name=
    $age=
    $cell= 
    $address= 
    $email= 
    $date= 
    $checkbox="";

    $rtn_arr = [
        'status'=> false,
        'msg'=>"表單建立失敗\n"
    ];

    function filter($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(empty($_POST["name"])){
        // echo "姓名為必填\n";
        $rtn_arr["msg"].= "姓名為必填\n";
        
    }else{
        $name=filter($_POST["name"]);
    }
    if(empty($_POST["age"])){
        // echo "年齡為必填\n";
        $rtn_arr["msg"].= "年齡為必填\n";
    }else{
        $age=filter($_POST["age"]);
    }
    if(empty($_POST["cell"])){
        // echo "手機為必填\n";
        $rtn_arr["msg"].= "手機為必填\n";
    }else{
        $cell=filter($_POST["cell"]);
    }
    if(empty($_POST["address"])){
        // echo "地址為必填\n";
        $rtn_arr["msg"].= "地址為必填\n";
    }else{
        $address=filter($_POST["address"]);
    }
    if(!empty($_POST["email"])){
        $email=filter($_POST["email"]);
    }
    if(empty($_POST["date"])){
        // echo "寄送日期為必填\n";
        $rtn_arr["msg"].= "寄送日期為必填\n";
    }else{
        $date=filter($_POST["date"]);
    }
    $checkbox=$_POST["checkbox"];
    
    


    if(!empty($name)){
        if(!empty($age)){
            if(!empty($cell)){
                if(!empty($address)){
                    if(!empty($date)){
                        // echo "表單建立成功";
                        $rtn_arr["status"]= true;
                        $rtn_arr["msg"]= "表單建立成功\n";

                        if($_POST["checkbox"]=="true"){
                            // echo "確認訂閱煩死人不償命\n";
                            $rtn_arr["msg"].= "確認訂閱煩死人不償命\n";
                            
                            echo json_encode($rtn_arr,JSON_UNESCAPED_UNICODE);
                            exit;
                        }else{
                            // echo "不訂閱就是wise choice啦\n";
                            $rtn_arr["msg"].= "不訂閱就是wise choice啦\n";
                            
                            echo json_encode($rtn_arr,JSON_UNESCAPED_UNICODE);
                            exit;
                        }
                        
                    }
                }
            }
        }
    }

    echo json_encode($rtn_arr,JSON_UNESCAPED_UNICODE);