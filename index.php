<?php
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM  evento ";
    $ejecutar = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_index.css">
    <enlace rel="preconectar" href="https://fonts.googleapis.com">
    <link rel="preconectar" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Noto+Serif & display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce1ae3c06d.js" crossorigin="anonymous"></script>
</head>
<body>
<!--div class="general "></div> 
<div id="header" class="header">
        <a >
            <div class="titulo">
            <font  color="#FFFFF">GUANAJUATO</font>
            </div>
           <div class="descripccion"> 
           <font  color="#FFFFF">Patrimonio de la huminidad</font>
         </div>
         </div>
   </div>
   <div class="content">
<p> <font  color="#FFFFF">
El Poder Público únicamente puede lo que la Ley le concede y el gobernado todo lo que ésta no le prohíbe.
La Ley establecerá sistemas de impugnación y medios de defensa de los derechos de los particulares frente a los actos de las autoridades.
La Ley determinará la organización, funcionamiento, competencia y procedimientos de un organismo estatal de protección de los derechos humanos, dotado de plena autonomía, que conocerá de quejas en contra de actos u omisiones de naturaleza administrativa provenientes de cualquier autoridad o servidor público de carácter estatal o municipal que violen estos derechos, formulará acuerdos o recomendaciones públicas, no vinculatorias, denuncias y quejas ante las autoridades respectivas.
Este organismo no será competente para conocer de quejas que se originen con motivo de acuerdos o decisiones de instancias electorales, ni tratándose de resoluciones de naturaleza jurisdiccional; pero podrá conocer de asuntos de orden administrativo de los órganos de impartición de justicia que transgredan derechos humanos.</font>
</font></p>
</div>
    <div filtros>
    <a class="boton">UBICACION</a>
    <a class="boton">COSTO</a>
    <a class="boton">CATEGORIA</a>
    <a class="boton">DISIPLINA</a>
    <a class="boton">TIPO PUBLICO</a>
    <a class="boton">CATEGORIA</a>
    </div>
    
    <div class="fechas">
        <div class="article">
            <h2>
                <a href="#" title="link to this post"></a>
                <label for="start">
                <font  color="#FFFFF">Seleccionar dia</font>
                </label>
                <input type="date" id="start" name="trip-start"
               value="2018-07-22"
                min="2022-11-25" max="2024-12-31">
            </h2>
    <div class="vista">
      
       
        
    </div> 
-->
<div class="navbar">
    <div class="logo">
        <img src="./img/logo-guanajuato.png" alt="">
    </div>
    <div class="nav-btns">
        <a href="#">boton 1</a>
        <a href="#">boton 2</a>
        <a href="#">boton 3</a>
        <a href="#">boton 4</a>
    </div>
    <div class="nav-login">
        <a href="/login.php">Login</a>
    </div>
</div>
<div class="content">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae non aspernatur minima amet necessitatibus alias? Obcaecati repudiandae architecto mollitia odit, iure nam tenetur quidem ducimus veniam labore vero dolorem nisi omnis laboriosam quibusdam nesciunt officiis exercitationem quae provident deleniti? Odio ullam tempora aperiam illum nisi numquam omnis quas sunt iste possimus. Distinctio ut facere similique repellat quos, officiis dolorem explicabo id cumque eaque eius, praesentium blanditiis maiores illo fugiat dolores vitae veritatis! Amet inventore deleniti nulla natus iusto quibusdam! Excepturi, et dolore unde provident quos sapiente tempore quidem molestias soluta neque mollitia quaerat dolores perferendis cum aperiam dignissimos at. Consectetur recusandae quis voluptas iusto, sint earum accusantium debitis ut minima distinctio a placeat veniam autem, inventore, praesentium molestias voluptate enim at dicta incidunt odio? In esse odit explicabo beatae iusto nihil saepe, magni enim ipsa quas cum natus adipisci minus laborum ducimus tempore porro reprehenderit eum. Expedita necessitatibus nostrum et accusamus perspiciatis quia provident suscipit nihil? Fuga odio error quos earum ducimus soluta aliquam! Architecto recusandae molestiae illo quis obcaecati nisi in quidem ipsum tenetur libero tempora ab fuga, cupiditate rerum non cumque reprehenderit nihil maiores dignissimos numquam similique laborum ea temporibus! Molestiae ratione error architecto deleniti vero quas accusamus nemo eaque, corporis fuga itaque ipsam, aspernatur fugit dolorum deserunt. Sequi illo odit mollitia quaerat perferendis earum commodi placeat ad iste dolorum eligendi doloribus vero pariatur sed saepe, beatae natus impedit totam fugit magnam consequatur quam! Ratione error minima quam, asperiores impedit necessitatibus? Consectetur id sint earum nihil nostrum quam voluptas ratione minima. Maiores autem repellat, doloribus sed consequatur vero ex dolorem suscipit architecto natus quisquam, quia dolores inventore perspiciatis veritatis libero, animi placeat aspernatur esse distinctio. Quis veniam laboriosam voluptates voluptatum officiis inventore! Doloribus sit modi repellat recusandae voluptatibus error vero laudantium vitae? Ipsam reiciendis animi ab. Officiis quos assumenda quae minus, culpa quibusdam rem voluptatum beatae corrupti ut eos magnam animi expedita laboriosam, maxime ex dolore ducimus? Autem, possimus itaque optio maxime cumque ad veniam praesentium aut debitis voluptatem hic, labore, molestiae architecto ullam enim et qui eius cum dolor. Maiores, hic neque dolorum dolorem iusto reiciendis voluptas quas obcaecati, temporibus, amet culpa repellendus. Error ut adipisci harum, exercitationem natus totam debitis aut laudantium, explicabo voluptate excepturi voluptas modi maiores deserunt blanditiis doloremque repellat. Libero optio itaque pariatur nihil, unde quae vero. Consequatur quam, quo nemo quasi deserunt dolorum, magnam omnis repellat earum ratione a magni? Nihil excepturi, repudiandae iure eius ex animi temporibus facere voluptate ratione magnam modi? Quos fuga ipsam cupiditate obcaecati quidem sapiente odit illum dolorum optio architecto maiores ex eligendi ratione voluptatem animi sit voluptas neque nesciunt accusantium error esse, repudiandae laborum quod! Fugit, minus voluptatem? Voluptas unde explicabo ea natus dolores cupiditate nostrum? Ad nobis sed nulla sint obcaecati unde architecto! Nam reprehenderit libero impedit expedita atque ullam nihil autem cupiditate magnam ad facilis dolores esse omnis ea amet blanditiis perspiciatis vero, ratione mollitia! Magni qui corrupti corporis odit dolores. Porro totam eos aliquam sequi ipsa fuga aut distinctio facere eligendi, deleniti magnam obcaecati necessitatibus voluptas similique amet ratione. Praesentium quae, cumque amet id deserunt saepe, iste doloremque totam ea neque hic nisi ipsa maiores vitae! Voluptatem dicta sed libero. Vero enim aliquam laboriosam rerum totam obcaecati architecto pariatur nulla id omnis, illum unde, doloribus iure voluptates fugit labore nemo. Facere nulla sint labore placeat aspernatur sapiente necessitatibus modi dignissimos, repudiandae nesciunt amet dolores culpa est ipsam nemo rerum expedita neque, facilis corrupti, laboriosam reiciendis. Aut veritatis repellat voluptas suscipit in hic eligendi alias numquam vitae eos quod est unde, iusto saepe pariatur fugiat aliquam? Molestias accusantium id maiores nobis quia provident, pariatur modi accusamus facilis est. Suscipit laborum nostrum praesentium dolore accusantium cupiditate est pariatur, distinctio maxime placeat numquam. Dolore perferendis ducimus eveniet aliquam quidem iure dignissimos, animi officiis quo debitis fugiat earum ratione, nobis quod assumenda. Debitis voluptatibus et tenetur dignissimos nobis alias quisquam doloribus sit incidunt repellendus quas hic iste officia ducimus impedit fugit, perferendis totam ut sunt sequi? Ipsa, quis earum numquam quos natus voluptatibus atque deserunt eos eveniet soluta ullam est ad sint reprehenderit, error expedita nemo architecto nisi obcaecati repellendus consectetur ex eum sequi vitae. Deleniti similique tenetur aspernatur alias hic consequuntur, reiciendis exercitationem corporis assumenda eveniet mollitia ullam ut delectus totam officiis? Aut, fugiat animi repellat magni iure dolore perspiciatis voluptates impedit saepe, distinctio qui? Doloribus atque molestias soluta rem numquam, odit, placeat ut, voluptatum vero quod eius provident quae dicta harum! Tenetur, sed molestias. Sequi totam eos voluptatem, vero tempora nihil suscipit dignissimos provident unde est aliquam, ipsum voluptatum, itaque eligendi harum aspernatur porro! Atque saepe fuga itaque eaque similique cupiditate quis reiciendis dolor quod accusantium vero minus illo, voluptate officiis quasi natus, minima ex ducimus veritatis assumenda nostrum corporis mollitia? Magnam, at. Laudantium deleniti ut ad. Nostrum eum atque eveniet, tempore facere voluptate sit illo cupiditate unde. Alias quo at dolorem culpa facilis illum explicabo sapiente odio commodi quia quos repudiandae perspiciatis rerum, ratione quidem quod! Iure esse eveniet, natus rerum voluptatem enim. Quis delectus laborum nihil autem labore quos nesciunt corrupti aliquid esse neque, amet deserunt, expedita tempora voluptatum reprehenderit quae aperiam accusamus voluptatem nam. Mollitia possimus ab vel, eius veritatis fugit commodi sunt magni sint iste quidem incidunt atque porro nemo consequuntur eos assumenda minus temporibus reiciendis rem ex neque! Consequuntur quae iure ipsam assumenda sequi quod tempore reiciendis reprehenderit suscipit aspernatur harum, laudantium eaque excepturi possimus recusandae officiis labore soluta temporibus, cum odio sunt doloremque repudiandae magni? Incidunt quos iure officiis assumenda, tenetur similique tempora vitae veniam amet excepturi itaque nemo molestias quo? Autem fuga explicabo eveniet facilis, rem cumque doloremque id labore cum? Nulla laborum et a nobis quibusdam possimus natus ipsum laboriosam minus debitis sed ad repellat iure velit commodi deleniti dignissimos, veritatis, in sint numquam iusto sapiente autem! Repellat neque magnam rem nihil ducimus, modi officiis perspiciatis deleniti voluptatem doloribus laudantium adipisci maiores aliquam cum itaque tempora ex nemo nostrum numquam voluptates. Laboriosam deserunt fugiat magni consequuntur, reprehenderit voluptatibus quibusdam rerum corporis blanditiis nostrum magnam quia placeat delectus.
</div>
</body>
</html>