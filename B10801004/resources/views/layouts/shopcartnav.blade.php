            <div class="smalllink1">
                <a href="menu"><span> 商品介紹 </span></a>><a href=""><span> {{$infos['name']}} </span></a>
            </div>
            <main class="maininfo">
                <div>    
                    <img  class="imgid" src="{{$infos['picture']}}" >   
                </div>
                <div>
                    <h2>{{$infos['name']}}</h2> <hr> 
                    <h2 style="color: saddlebrown;">NT${{$infos['price']}}</h2> <br>

                    <ul>
                        <li><p>{{$infos['place']}}</p></li>
                        <li><p>{{$infos['description']}}</p></li>
                        <li><p>{{$infos['process']}}</p></li>
                    </ul>

                
                    <form method="post" action="/store" enctype="multipart/form-data" class="form1">
                    @csrf
                        <div class="number">
                            <select name="number">
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                                <option value="6"> 6 </option>
                            </select>
                        </div>
                        <input type="text" name= "name" class="valid" value="{{$infos['name']}}">
                        <input type="text" name="price" class="valid" value="{{$infos['price']}}">
                        <input type="text" name="description" class="valid" value="{{$infos['description']}}">
                        <input type="textarea" name="picture" class="valid" value="{{$infos['picture']}}">
                        <button class="submit1" type="submit" onclick="showalert()">
                            <a href="" >
                                <sapn>加入購物車</span>
                            </a>
                            <script>
                                function showalert(){
                                    alert("已加入購物車！");
                                }
                            </script>
                        </div>
                    </form>
                </div>
            </main>