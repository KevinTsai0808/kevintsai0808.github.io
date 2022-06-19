            <div class="smalllink1">
                <a href="/"><span> 首頁 </span></a>><a href=""><span> 購物車 </span></a>
            </div>
                <?php 
                    echo "<main class='maininfo'>";
                    DB::connection('mysql');
                    $products = DB::select('select * from products');
                    $total = 0;
                    foreach($products as $product){
                        echo "<div>";
                            echo "<img  class='imgid' src= {$product -> image} > ";
                        echo "</div>"; 
                        echo "<div>";
                            echo "<h2>" .$product -> name. "</h2>", "<hr>";
                            echo "<h2 style='color: saddlebrown;'>", "NT$". ((int)$product -> price) * ((int)$product -> number ) . "</h2>", "<br>";
                            $total = $total + ((int)$product -> price) * ((int)$product -> number );
                            echo "<ul>";                       
                                echo "<li>";
                                    echo "<p>" .$product -> description. "</p>";
                                echo "</li>";
                            echo "</ul>";
                            echo "<form method='post' action='/update'class='form1'>";
                            echo csrf_field();
                                echo "<div class='number'>";
                                    echo "<select name='number' >" ;
                                        echo "<option value={$product -> number}>" .$product -> number  . "</option>";
                                        echo "<option value='1'>" , "1" , "</option>";
                                        echo "<option value='2'>" , "2" , "</option>";
                                        echo "<option value='3'>" , "3" , "</option>";
                                        echo "<option value='4'>" , "4" , "</option>";
                                        echo "<option value='5'>" , "5" , "</option>";
                                        echo "<option value='6'>" , "6" , "</option>";
                                    echo "</select>";
                                echo "</div>"; 
                                echo "<input type='text' name= 'id' class='valid' value={$product -> id}>";
                                echo "<button class='submit1' type='submit' onclick='showalert()'>";
                                    echo "<a href=''>";
                                        echo "<span>", "確認更改", "</span>";
                                    echo "</a>";
                            echo "</form>";
    
                            echo "<form method='post' action='/delete' class='form2'>";
                            echo csrf_field();
                                echo "<input type='text' name= 'id' class='valid' value={$product -> id}>";
                                echo "<button class='submit2' type='submit' >";
                                    echo "<a href=''>";
                                        echo "<span>", "刪除訂單", "</span>";
                                    echo "</a>";
                                echo "</button>";
                            echo "</form>";
                        echo "</div>"; 
                    }
                    echo "</main>";
                    echo " <br>", "<br>", "<hr>";
                    echo "<h2 class='total'>", "總計: NT$" . $total . "</h2>" , "<br>" ;
                    echo "<button class='pay' type='submit' onclick='showalert()'>";
                        echo "<a href='' >";
                            echo "<span>", "確認結帳", "</span>";
                        echo "</a>";
                    echo "</button>";

                ?>
           
            
            



                       
                   
           
