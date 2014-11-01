<h4 class="text-right">بستن سایت</h4>
     <?php echo form_open('admin/configuration/SaveSiteOff')?>
	<table class="table dir-rtl">
      <tr>
        <td align="left">سایت غیر فعال :</td>
        <td>
        	<div class="span2 pull-right">
                <span>بلی :</span><input name="siteOff" type="radio" title="On" value="0" <?php echo $WebOn?> />
                <span>خیر :</span><input name="siteOff" type="radio" title="Off" value="1" <?php echo $WebOff?>/>
            </div>
            <?php echo form_submit('save','ذخیره','class="btn btn-primary pull-left"')?>
        </td>
      </tr>
      <tr>
        <td align="left">تنظیم ساعت فعال شدن :</td>
        <td> 
                <select name="Seconds" class="span1 pull-right" >
                <?php for ($i= 1 ; $i <= 59 ; $i++): ?>
                  <option><?php echo $i?></option>
                 <?php endfor ?> 
                </select>
                
               <select name="Minutes" class="span1 pull-right">
                 <?php for ($i= 1 ; $i <= 59 ; $i++): ?>
                  <option><?php echo $i?></option>
                 <?php endfor ?> 
                </select>
                
                <select name="Hours" class="span1 pull-right">
                 <?php for ($i= 1 ; $i <= 12 ; $i++): ?>
                  <option><?php echo $i?></option>
                 <?php endfor ?> 
                </select>
        </td>
      </tr>
      <tr>
      	<td>تاریخ :</td>
        <td>                
   			<input type="text" class="datepicker span2 pull-right" name="Days"/></td>
      </tr>
      <tr>
        <td align="left" valign="top">توضحات سایت :</td>
        <td><?php echo form_textarea('description',$OffDescription,'class="span5 pull-right"')?></td>
      </tr>
    </table>
    <?php echo form_close()?>
        </div>
    </div>
</body>
</html>

