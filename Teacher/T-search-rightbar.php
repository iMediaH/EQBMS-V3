<div id="g-rightbar">
    <div id="r_head">
    	<span style="color:#0F0">>></span><span style="font-size:18px">试题库</span>  
    	<div class="icon-search icon-3x" id="rightbar_s"></div>
    	<div class="icon-3x icon-plus-sign" id="add_q" ></div>
    </div>
    <table id="table1">
        <tr>
          <th ><input type="checkbox" name="q_all" value=""/></th>
        <th>编号<img src="../images/ul.png"/></th>
        <th>题型<img src="../images/ul.png"/></th>
        <th>题目简要<img src="../images/ul.png"/></th>
        <th colspan="3" >操作</th>
        </tr>
        <?php 
        include("../commonfile/dbconnect.php");
        $sql="select * from judgment";
        $rs=mysql_query($sql);
        $i=1;
        while($row=mysql_fetch_array($rs)){
        ?>
        <tr>
        <td ><input type="checkbox" name="q_all" value=""/></td>
        <td><?php echo $i?></td>
        <td><?php echo $row["TypeName"]?></td>
        <td><?php echo $row["Question"]?></td>
        <td><i class="icon-search icon-2x"></i></td>
        <td><i class="icon-trash icon-2x"></i></td>
        <td><i class="icon-pencil icon-2x"></i></td>
        </tr>
        
        <?php
        $i=$i+1;
        }?>
    </table>
</div>

<script>
$("#table1 th").css('background','#dfeecd');
</script>