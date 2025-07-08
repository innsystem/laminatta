<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('title')">
    <!-- Title-->
    <title>Grupos do Facebook | {{$getSettings['site_name']}}</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ $getSettings['favicon'] ? asset('storage/' . $getSettings['favicon']) : asset('favicon.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('plugins/bootstrap-5.3.5/css/bootstrap.min.css') }}" rel="stylesheet">

    @yield('pageCSS')

    <style>
        ul.groups {
            padding: 0;
            margin: 0 0 30px;
            list-style: none;
        }

        ul.groups li {
            display: inline-block;
        }

        ul.groups li a.btn {
            width: 48px;
            height: 36px;
            line-height: 36px;
            margin: 8px;
            padding: 0;
            font-size: 15px;
            font-family: Arial;
            border: 1px solid rgba(0, 0, 0, 0.3);
        }

        ul.groups li a.btn.btn-primary {
            background: #37adef;
        }

        ul.groups li a.btn.btn-primary:visited {
            background: rgb(61, 61, 61) !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="side-text-right-title f-size25">Grupos do Facebook</h2>
                <!-- conteudo -->
                <p><b>Explicação:</b> Cada botão com um número abaixo corresponde a um grupo no facebook. <br> Prepare seu texto, entre em cada um e realiza sua divulgação. É simples!</p>

                <p class="hide d-none">Dúvidas de como realizar uma boa divulgação nos grupos abaixo? <br>
                    Assista nossa <a href="https://www.youtube.com/watch?v=xr87jpqbsLI&amp;index=14&amp;list=PLCHp7y2B24qnUCqw8Fjfn7yNwB7OVWd9R" target="_Blank">vídeo-aula</a> ensinando passo-a-passo como realizar sua divulgação nos grupos abaixo.</p>

                <h4>Grupos de Ribeirão Preto</h4>

                <ul class="groups">
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1738181559742343/?ref=group_browse_new">1</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/253069014870796/?ref=group_browse_new">2</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/731090620349684/?ref=group_browse_new">3</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/298579440253486/?ref=group_browse_new">4</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Soparanegocios/?ref=group_browse_new">5</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/473797546018298/?ref=group_browse_new">6</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/bazaronlineribeirao/?ref=group_browse_new">7</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mkteventosrp/?ref=group_browse_new">8</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/356664934447481/?ref=group_browse_new">9</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/488376591205262/?ref=group_browse_new">10</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/bonsnegociosrp/?ref=group_browse_new">11</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1384862671764802/?ref=group_browse_new">12</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/282336531867886/?ref=br_rs">13</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/anunciosribeirao/?ref=br_rs">14</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/228004190643292/?ref=br_rs">15</a></li>
                </ul>


                <h4>Grupos de Vendas</h4>
                <ul class="groups">
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgueasuapagina">2</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Soparanegocios">3</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadaolins">5</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/sacoleiraserevendedorasmanaus">6</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/RendaExtraDigital">9</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/129277470557422">Mu 10</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/bazarzao">11</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/641736489193669">Mu 12</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/548249001921793">Mu 13</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Ibitingaclassificados">16</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/282336531867886">17</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/405423156191731">19</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/promofazrj">20</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mmnclassificado">24</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/evandrodutra">26</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/lojasda44gyn">28</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/passeiodasagua">29</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/118510694963509">33</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/297492747038200">Mu 35</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/495748087185470">36</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/476402189133398">37</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/www.compreidovizinho.com.br">38</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgacaolivre">39</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/527541093924305">42</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/diskconvites">44</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/revendedoresefabricantes">47</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadosclassitec">48</a></li>



                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/532291786802675">51</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/voutrabalharonline">52</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/204832576356891">53</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulguefacil">54</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1543961549190331">55</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/atacadistasconfiaveis">56</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/530480713644938">57</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/179351692268339">58</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/161837910644407">59</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/117842938388813">60</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muservershard2018">61</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1465828766983504">62</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendetudovrbm">63</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/129241907244013">64</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vagasparajornalistas">65</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadokipexinxa">66</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1696427503935875">67</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/topdescontosoficial">68</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1606977719580567">69</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1578974545695304">70</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1558722104452687">71</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadozonanorte">72</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1535010416509702">73</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1533440113550730">74</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/VD.CP.TR">75</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1515978785308417">76</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1482146562107815">77</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1457573664565396">78</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1436799973212058">79</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/aliexpresspassoapasso">80</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/varejaodobras">81</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1421168901519701">82</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1412625915633097">83</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1410732462473294">84</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/roberthussar">85</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1402386396717945">86</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1399026413476286">87</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1396018220640284">88</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1390199877883181">89</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadaodenegocios">90</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1342062855870903">91</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1079700128713875">92</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/feira.serranasp">93</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/951887838175126">94</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MMNOficial">95</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/933660346771362">96</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/910546828987962">97</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadosbrs">98</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/diretodasfabricas">99</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MMN.Ganhe.dinheiro.em.casa">100</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/847650532024486">101</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/topatudopordinheiro">102</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadosedesapegosjundiai">103</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/797062047083369">104</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/789922464403573">105</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/776954042378192">106</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/744582458930591">107</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/stifflertech">108</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/CLASSIFICADODOURADOSMS">109</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/estadosunidosdaamerica">110</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendaszonaleste">111</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/694245417266136">112</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/690483947690108">113</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/desapegosbarueri">114</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgabrasiloficial">115</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/662960630407140">116</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/LideresdoMMn">117</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/649711281708207">118</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/atacadovarejobrasil">119</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/628475027183680">120</a></li>


                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/612746518739049">123</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/606754442698178">124</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/compraantifraude">126</a></li>

                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/OsLideres">128</a></li>

                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MarketingMultinivelOficial">133</a></li>

                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/545587625490482">136</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DILVUGADORESMMN">137</a></li>

                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/536982546353478">140</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/536064956480644">141</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/530222630383840">142</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/523364571079943">143</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/posteadoresdemu">144</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/trabalhocasavivobem">145</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/514421775310654">146</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/513186972085149">147</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/511168345614667">148</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/507703622621563">149</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/webdesignBRhue">150</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/CompraVendaFortalezaCE">151</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/495282437227968">152</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/488381947921620">153</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ProcurandoADM.CDC">154</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/486190334729794">155</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/guiemau">156</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/481690708590322">157</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/seguidoresface">158</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/catvbrasil">159</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercadolivreceara">160</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/naoaoestresse22">161</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/asinha">162</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/466176163404278">163</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/atacadao">164</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ganhedindinextra">165</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/453536664685193">166</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/rolo4x4">167</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/wmcomerciallider">168</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/450061985035004">169</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/447366138649292">170</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ecommercebrasil">171</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/443233025719092">172</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/440933085949213">173</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/438948146276736">174</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/comprastrocasevendaspernambuco">175</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/bugiganga2">176</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/432749360123906">177</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/426597420445">178</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/423382314430830">179</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/420341131360493">180</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/familiamuonline">181</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/415494611801847">182</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/dinheiroganhar">183</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/412741125513928">184</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ESTOROUNONORTE">185</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/406194402779805">186</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/comuheadshot">187</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/402293913154825">188</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/milenius">189</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/399759636754220">190</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/399624290080714">191</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/399082603489756">192</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/tratofeitorp">193</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/397243257074060">194</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/395546900588842">195</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Spinelli">196</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/391461330962428">197</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/comprouevendeuam">198</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/387355881351732">199</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/387099991435636">201</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/386550358076154">202</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muhardserver">203</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/BriquenaRede">204</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/383263711808065">205</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/381255358614327">206</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/novidadeseoportunidades">207</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/377444899030211">208</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/friendsgrupo">209</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/376834715729531">210</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/AMNEGOCIOSEANUNCIOS">211</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/roraimaclassificado">212</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Dinheiroemcasa">213</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/372035336177538">214</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/370754652971821">215</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/netchoplain">216</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/grupoitasatdevendas">217</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/367322263282605">218</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/365550186946536">219</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/anunciogeral">220</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/364891296938660">221</a></li>




                    <!-- Mu -->



                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/rppassos">225</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificados.saoleopoldo">227</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/353889278050154">228</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/349625911895025">229</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/itenho">230</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercado.desapego">231</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/rendaextra01">232</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/339808279480409">233</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/BAZARROOTSWIRELLESBH">234</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/336348099758431">235</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/331010857053853">237</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/VemNoDivulgaPaginas">238</a></li>



                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/315915348549604">244</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/314881281921206">245</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ricardopodesta">246</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/310127942416475">248</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mmndivulgueaqui">249</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/304716179675255">250</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/303454829826652">251</a></li>

                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/300870873334744">252</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/FEIRADOROLORIBEIRAOPRETO">253</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/298353520304261">254</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/gessoviale">255</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Muaway1Membros">256</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/290666571081278">257</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/290301687687784">258</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/288737381264521">259</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MUAWAYPARCEIROSIII">260</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/meudinheironline">261</a></li>

                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/283169905202594">262</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/279619768854516">263</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/denerzrBrasil">264</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/278693028907423">265</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ClassificadoMMN">266</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgacaodepaginas">267</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/272372069565565">268</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/269832496450283">269</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/262418453864142">270</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/257497044373495">271</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ServidoresDeMuOnline">272</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/invest2reais">273</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadossertaozinho">274</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadosm">275</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/250904185083210">276</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Negocioseoportunidads">277</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/solucoesseguranca">278</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/curtidor01">279</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vitrinedivulgue">280</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/curitiba.compra.venda.de.tudo">281</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muonlinedivulgacao2017">282</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/241763105973578">283</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/240759802739358">284</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/235829323225614">285</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/universomultinivel">286</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/235246449824973">287</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/233216780151770">288</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/231948933498053">289</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/230615417088805">290</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/228744450618699">291</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/228557257159910">292</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/228429430648465">293</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DinheiroExtraOnline">294</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/223136801099954">295</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/216621141813548">296</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/215775088598929">297</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/desenvolvimentoweb">298</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/shoppingcenterbrasil">299</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/207803095999754">300</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/OsMARKETEIROS">301</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/206485399414783">302</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/205888756201592">303</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/205084246316987">304</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/204254126382808">305</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/202484449924166">306</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/200239466843824">307</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/198788596951226">308</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/196925657135015">309</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/smkbsampa">310</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/194085537293604">311</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/192907224169668">312</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/184915491972762">313</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/dinheironainternet">314</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/WebDesignBR">315</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/176985779156865">316</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/175755156191883">317</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/compraevenda3ls">318</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/feiradorolosaocarlos">319</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/seguidoreseamigosnoface">320</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/163840723777724">321</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/163320927184235">322</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/161964510589148">323</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/159218167468029">324</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/centraldepaginas">325</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/158186510967610">326</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/156828147832534">327</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/telexfreebrasil">328</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/sistemarendainfinita">329</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/trabalheemcasaacre">330</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/153374864856079">331</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/152850908227803">332</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgueeganhe">333</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/kitvendasdanet">334</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/jjprofessionaldesigners">335</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/149487785261026">336</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/149120478619759">337</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/148919545232711">338</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/designer.grafico">390</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/145527412298483">340</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendasecomprasaracaju">341</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MMNBrasilOnline">342</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/VendendoeComprandoSTZ">343</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/behancebrasil">344</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/136072523265852">345</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendasemgoiania">346</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/FERADOROLO.SKATE">347</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/129985787205049">348</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/brandingbrasil">349</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/126602624216945">350</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/arrematei">351</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadonultinivel">352</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/byofertas2">353</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/anunciosgratis">354</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/116949628464764">355</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ClassificadosGratisCwb">356</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ganhandodinheiroonlineagora">357</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MultinivelOnLine">358</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/105367132937292">359</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Buscala">360</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/marketingmultinivelmundial">361</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/portoalegrecompras">362</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/444856088924625">363</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/298579440253486">364</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/opencart.brasil.oficial">365</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/731090620349684">366</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/POSTEADOR.DeMuOnline">367</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/595453033834755">368</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/363776350364176">369</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgacaoaquidasuapagina">370</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/171798196169304">371</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mkteventosrp">372</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/365200093554341">373</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Cursostop">374</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercadolivreparaibitinga">375</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1400846506897903">376</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadosam2.0">377</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/450079478452509">378</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/atacadoroupasgoiania">379</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/486127038084247">380</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/dinheiroonlinemmn">381</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/entrananet">382</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/neorp">383</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1557994267786729">384</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/498817333541619">385</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/488795024482409">386</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/534596759902429">387</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/103132163360929">388</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercadolivreba">389</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/530208403706636">390</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/bonsnegociosrp">391</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadosbarretostrezm">392</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/shoppingdabaixada">393</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/negociosaracuai">394</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/678598408889780">395</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DivulgacaoMuOnline">396</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/182092638618801">397</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/briquezonanortelestepoa">398</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/comprasevendasbaixada">399</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/sertaoclassificados">401</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendasetrocasguaxupe">402</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercado.bolsas">403</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/olxribeiraopreto">404</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ADDnoWhatsApp">405</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/424199357641394">406</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendastrocasemgeral">407</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/863167217032782">408</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1555553214718138">409</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/581291715373702">410</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/atacadaodobrasbomretiro25marcocompraroupaatacado">411</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendascomputadoresnotebookribeiraopreto">412</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/579701555415489">413</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1404388136470538">414</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1397861060489307">415</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/183334558532119">416</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/bazarroupasbh">417</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/448313261868011">418</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/531622296885314">419</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/NITEROIRJ.CVAV">420</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/negociofechadochapeco">421</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/700165210042082">422</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/atividadesonline">423</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/488376591205262">424</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/356664934447481">425</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/bazar.rav">426</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/2178158509075018">427</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/pensamentomilionario">428</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadosdivulgacity">429</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1667483526841638">430</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1629632210633401">431</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1604210216530242">432</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1569589176604924">433</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/americanaeregiaovendacompratroca">434</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/FornecedoresAtacadistasSP">435</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/enjoeilondrina">436</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1531012560484808">437</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MotoG.SuperSU">438</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/IbitingaUtilidadePublicaeNegocios">439</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1458301241058305">440</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1452867541623672">441</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1436021003287827">442</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1427651337480948">443</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1422703481278235">444</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1418769918368220">445</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1412113389094624">446</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/deivilzmuoficial">447</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1405587979659847">448</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DiivulgaFUNK">449</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1396466533919370">450</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercadao.fashion">451</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1384862671764802">452</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ganheseguidoreshhhl">453</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/sentidounicocalcados">454</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MarLike">455</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/991449004260731">456</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/dieimyprodutoradeeventos">457</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/941332099285094">458</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/sacoleiraserevendedores">459</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/902013853216476">460</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ATACADISTALOJA10A50">461</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/857309624291051">462</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DvRiodeJaneiro">463</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MuWebergames">464</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/CURTAAQUI">465</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/798257843554482">466</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/794647483931269">467</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/shoppinbook2">468</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/765342970163152">469</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/lojavirtualparatodos">470</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/meadds">471</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/714598385267449">472</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/699849116779128">473</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/690905507681904">474</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/690292277666771">475</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercado.calcados">476</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/667224386630213">477</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/representanteatacado">478</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/653274178052914">479</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/642508255846066">480</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/633376836791509">481</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/627428050600827">482</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/623766077749344">483</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/616503761726806">484</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/NETWORKMARKETING333">485</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/pontodosclassificados">486</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/599305073445011">487</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/euamommn">488</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/586433871403351">489</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/582003261825287">490</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/579362548777938">491</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Ofertas.PromocoesRibeiraoPreto">492</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/556632144438824">493</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/555629027793551">494</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/f1agora">495</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/552095904885270">496</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/547029795332023">497</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mmnced">498</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/540937202646527">499</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/anuncienoclassificadosbrasil">501</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/empreendedoresonlinek2group">502</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/533300010032699">503</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/523837234377857">504</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/RenanPierry">505</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/517847968274121">506</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/515529705134198">507</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/512357302115133">508</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/508795445861203">509</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/506697756195640">510</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DivulgacaoNoFace">511</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/swoppingbook">512</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/490872620964106">513</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Posteadordemuu">514</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/486743398040211">515</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/484917101608468">516</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/483026101765693">517</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/grupocrf">518</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/477034962308280">519</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/alebikeparts">520</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/472523792855183">521</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/471743466188718">522</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/466205460082492">523</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/462937083803950">524</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/clasline">525</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/454233211334221">526</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/laravelbrasil">527</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendasrolostrocasabcd">528</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/450494181654534">529</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Grupoclassificadoslafaiete">530</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/fazendoacontecer">531</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/444102932282866">532</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/442027265889690">533</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/LosMejoresServersdeMU">534</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/LideresdoMarketing">535</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/437308779719508">536</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/432835916912280">537</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/432386076877177">538</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/423820127733784">539</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/420486474722767">540</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/419043868190766">541</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/417116751673369">542</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/negociosdasquebradas">543</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/413571092042976">544</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/412232718897795">545</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MulticlickEuropa">546</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/marketinglivre">547</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/naoaoestresse24">548</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/401420626589170">549</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/400823083334779">550</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/399635353483408">551</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/399594206855232">552</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadosembu">553</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/397753226955231">554</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/396350357096609">555</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/395072747232347">556</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/392030470874471">557</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/weddingbrasil">558</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ClassificadosOlimpiaSP">559</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/387136238056977">560</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/387063704668521">561</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/386525728118772">562</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/385950584789746">563</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/anuncierp">564</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MUServersOnline">565</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/379802562128078">566</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/377633895688009">567</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DomAlberto">568</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/376887522357527">569</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Rofino25">570</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/feiradorolodepauliniaeregiao">571</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/nopreco">572</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/omdva">573</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/371437506291120">574</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendas.em.sp">575</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/369136706491797">575</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muonlinepublica">576</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/365828776878850">577</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendasmogi">578</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/364902413582508">579</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/GabrielGb">580</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/gerandocontatos">581</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/anttoniomarquess">582</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/comolucrar">583</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/358843440824693">584</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/desenvolvimentowebbrasil">585</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercadolivreibitinga">586</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/352667351553848">587</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/grupodesign">588</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/345918625553424">589</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/343574085771190">590</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendemaisribeirao">591</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/338326686234866">592</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgueseunegocio">593</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/334967009942119">594</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/334259499993835">595</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/BazarRootsVendanova">596</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/328163190598279">597</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/marketingtotal2013">598</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendetudoatacadoevarejo">599</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muonlineservers">600</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/316054185170495">601</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/trabalhonanet">602</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/314870318648336">603</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/eletronicosacessorios">604</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/311586362287142">605</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/antoniomarques">606</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/306448556050093">607</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/304039029740171">608</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/shopcidade.sp">609</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/300712100005333">610</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/299878910140859">611</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/TInaBahia">612</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/menorpreconiteroi">613</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/tecnologiajava">614</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ACREVENDAS">615</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/grupovendasbahia">616</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/baixetudophotoshop">617</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/FACEBRICKDENOVOHAMBURGOEREGIAO">618</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/279297182163982">619</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/279211355489611">620</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/consultoresemediadoresimobiliarios">621</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgueseumuaki">622</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/272820376228733">623</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/270766989706139">624</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/265595753506251">625</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/negocietudo">626</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/atacadaodobras">627</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/bomnegocioribeirao">628</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/255049094593666">629</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/gruposdasgatinhas">630</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/grupowhmcs">631</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/timedaaguia">632</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/247459682052881">633</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/NegociosENoticiasImperatrizMA">634</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/245749298876490">635</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/244146965713395">636</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/243708669113273">637</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/241817905965779">638</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/desafiosphotoshopbrasil">639</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/marketingpensamentopositivo">640</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/tudoparaelasgo">641</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/235288650009063">642</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/234175833408036">643</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendasetrocas">644</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/html5.br">645</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/228648907319260">646</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Djemusicosdelondrina">647</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/225415760804744">648</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/amgiosempresarios">649</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/215785868583392">650</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/210894085720059">651</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/209804082528429">652</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Piracy.Mu">653</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/rendaextra03">654</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/206750629389753">655</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/206483792853621">656</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/205689382915234">657</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/204433739729081">658</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/201388279981705">659</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/marketingtotal">660</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/wordpress.brasil">661</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/roeoficial">662</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/194131820758314">663</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vendasvalenca">664</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/vazebjj">665</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/produtorasltda">666</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/180701488727668">667</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/178746665642404">668</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/176395642571178">669</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/170852843103451">670</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/169034526553716">671</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/166485670214891">672</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/sanderempreendimentosdivulgacaogratis">673</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/163391690499973">674</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/162533883918535">675</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/160023860819257">676</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/AVIDAMEENSINOU">677</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/158232284371684">678</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mmndicasnovidades">679</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/156753887821584">680</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/155890154558632">681</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/155199641284457">682</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Div.livre">683</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/geralteseguindo">684</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/152546541608052">685</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/barganha">686</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/150242608485563">687</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/149589741847352">688</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/149150065256786">689</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/148939878581541">690</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/mercadolivrevrbm">691</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/universidadefederaldevicosa">692</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/144887839050828">693</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/141841976019981">694</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/grupomufable">695</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/pedro.hab">696</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/135687853249498">697</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadossaopaulosp">698</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Divulguegratis">699</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/127926267377372">700</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/negociosnainternetmmn">701</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/campobelomg">702</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/123516864486342">703</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/119948988082359">704</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/SaiDaCrise">705</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/boasvendasgoiania">706</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/116835618471089">707</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/diamondimportados">708</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/sistemadoisreais">709</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/105628709785901">710</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/jogadoresdemuonline">711</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Vagasdeempregoribeiraopreto">712</a></li>

                </ul>

                <h4>Grupos de MuOnline</h4>

                <ul class="groups" id="muonline">
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/450079478452509/?ref=group_browse_new">1</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/479424015510973/?ref=group_browse_new">2</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/498817333541619/?ref=group_browse_new">3</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1557994267786729/?ref=group_browse_new">4</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1427692260791972/?ref=group_browse_new">5</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/297492747038200/?ref=group_browse_new">6</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MuOnlineHardServers/?ref=group_browse_new">7</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/678598408889780/?ref=group_browse_new">8</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muawayvendasetrocas/?ref=group_browse_new">9</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DivulgacaoMuOnline/?ref=group_browse_new">10</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/129277470557422/?ref=group_browse_new">11</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/548249001921793/?ref=group_browse_new">12</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/644049578948852/?ref=group_browse_new">13</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/641736489193669/?ref=group_browse_new">14</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Cursostop/?ref=group_browse_new">15</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/595453033834755/?ref=group_browse_new">16</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/579701555415489/?ref=group_browse_new">17</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/DILVUGADORESMMN/?ref=group_browse_new">18</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Posteadordemuu/?ref=group_browse_new">19</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/posteadoresdemu/?ref=group_browse_new">20</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/511168345614667/?ref=group_browse_new">21</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/LosMejoresServersdeMU/?ref=group_browse_new">22</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/405298359481625/?ref=group_browse_new">23</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/grupomufable/?ref=group_browse_new">24</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/deivilzmuoficial/?ref=group_browse_new">25</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/1458301241058305/?ref=group_browse_new">26</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MuChaosOnline/?ref=group_browse_new">27</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/396761787037740/?ref=group_browse_new">28</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/396350357096609/?ref=group_browse_new">29</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/392030470874471/?ref=group_browse_new">30</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muhardserver/?ref=group_browse_new">31</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MUServersOnline/?ref=group_browse_new">32</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/omdva/?ref=group_browse_new">33</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/371437506291120/?ref=group_browse_new">34</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muonlinepublica/?ref=group_browse_new">35</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/363776350364176/?ref=group_browse_new">36</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/361184607273703/?ref=group_browse_new">37</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/326048570799663/?ref=group_browse_new">38</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muonlineservers/?ref=group_browse_new">39</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/300712105333/?ref=group_browse_new">40</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/299878910140859/?ref=group_browse_new">41</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/298353520304261/?ref=group_browse_new">42</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Muaway1Membros/?ref=group_browse_new">43</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/MuAwaY.TrocaseVendas/?ref=group_browse_new">44</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/divulgueseumuaki/?ref=group_browse_new">45</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/ServidoresDeMuOnline/?ref=group_browse_new">46</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/250904185083210/?ref=group_browse_new">47</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/235288659063/?ref=group_browse_new">48</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/215785868583392/?ref=group_browse_new">49</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/215775088598929/?ref=group_browse_new">50</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/Piracy.Mu/?ref=group_browse_new">51</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/posteatumuaki/?ref=group_browse_new">52</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/196925657135015/?ref=group_browse_new">53</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/163320927184235/?ref=group_browse_new">54</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/161964510589148/?ref=group_browse_new">55</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/POSTEADOR.DeMuOnline/?ref=group_browse_new">56</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/123516864486342/?ref=group_browse_new">57</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/jogadoresdemuonline/?ref=group_browse_new">58</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/classificadonultinivel/?ref=group_browse_new">59</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/145527412298483/">60</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/muonlinedivulgacao2017/">61</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/361184607273703">62</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/324058071026861">63</a></li>
                    <li><a class="btn btn-border btn-primary" target="_blank" href="https://www.facebook.com/groups/644049578948852">64</a></li>

                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="{{ asset('plugins/bootstrap-5.3.5/js/bootstrap.bundle.min.js') }}"></script>

    @yield('pageJS')
</body>

</html>