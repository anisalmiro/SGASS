<!DOCTYPE html>
<html>
<head>
	<title>Relatorio de Stock</title>
</head>
<body>

<tr>
     @foreach($stock_list as $st)
     
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$st->tipo.'</td>
       <td style="border: 1px solid; padding:12px;">'.$st->designacao.'</td>
       <td style="border: 1px solid; padding:12px;">'.$st->partN.'</td>
       <td style="border: 1px solid; padding:12px;">'.$st->cor.'</td>
       <td style="border: 1px solid; padding:12px;">'.$st->quantidade.'</td>
      </tr>
      @endforeach
</body>
</html>