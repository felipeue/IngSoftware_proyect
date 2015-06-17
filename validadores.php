<?php

function valLetter($n)
{
    if(!preg_match('/^[a-zñA-ZÑ, ]*$/',$n))
    {
     	?>
 			<script languaje="javascript">
  			alert("Nombre o apellido invalido");
  			location.href = document.referrer;
			</script>
		<? 
		return FALSE;
    }
    elseif ($n == '') 
    {
    	?>
 			<script languaje="javascript">
  			alert("Nombre o apellido invalido");
  			location.href = document.referrer;
			</script>
		<? 
    }
    else
    {
    	return TRUE;
    }
}
function valnum($n)
{
    if(!preg_match('/^[0-9, ]*$/',$n))
    {
     	?>
 			<script languaje="javascript">
  			alert("Monto invalido");
  			location.href = document.referrer;
			</script>
		<? 
		return FALSE;
    }
    elseif ($n == '') 
    {
    	?>
 			<script languaje="javascript">
  			alert("Monto invalido");
  			location.href = document.referrer;
			</script>
		<? 
    }
    else
    {
    	return TRUE;
    }
}
function valida_rut($r)
{
    if ($r == '') 
    {
      ?>
      <script languaje="javascript">
        alert("Rut vacio");
        location.href = document.referrer;
      </script>
    <? 
    }
  $r=strtoupper(ereg_replace('\.|,|-','',$r));
  $sub_rut=substr($r,0,strlen($r)-1);
  $sub_dv=substr($r,-1);
  $x=2;
  $s=0;
  for ( $i=strlen($sub_rut)-1;$i>=0;$i-- )
  {
    if ( $x >7 )
    {
      $x=2;
    }
    $s += $sub_rut[$i]*$x;
    $x++;
  }
  $dv=11-($s%11);
  if ( $dv==10 )
  {
    $dv='K';
  }
  if ( $dv==11 )
  {
    $dv='0';
  }
  if ( $dv==$sub_dv )
  {
    return TRUE;
  }
  else
  {
    ?>
    <script languaje="javascript">
    alert("Rut incorrecto");
    location.href = document.referrer;
    </script>
      <?
    return FALSE;
  }
}
function valfecha($fecha_ingreso)
{
if (ereg("(0[1-9]|[12][0-9]|3[01])[/](0[1-9]|1[012])[/](19|20)[0-9]{2}", $fecha_ingreso)) 
{
return true;
} 
else 
{
return false;
?>
      <script languaje="javascript">
        alert("fecha invalida");
        location.href = document.referrer;
      </script>
    <? 
}
}
function vacio($string)
{
  if($string = '')
  {
    return FALSE;
  }
  else
  {
    return TRUE;
  }
}
?>