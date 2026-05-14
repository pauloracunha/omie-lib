<?php

namespace OmieLib\Produtos\Nfconsultar\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\CBSTot;
use OmieLib\Produtos\Nfconsultar\Categorias;
use OmieLib\Produtos\Nfconsultar\Compl;
use OmieLib\Produtos\Nfconsultar\Departamentos;
use OmieLib\Produtos\Nfconsultar\Det;
use OmieLib\Produtos\Nfconsultar\IBSTot;
use OmieLib\Produtos\Nfconsultar\ICMSTot;
use OmieLib\Produtos\Nfconsultar\ISSQNtot;
use OmieLib\Produtos\Nfconsultar\Ide;
use OmieLib\Produtos\Nfconsultar\Info;
use OmieLib\Produtos\Nfconsultar\ItemPedido;
use OmieLib\Produtos\Nfconsultar\NFConsultarJsonClient;
use OmieLib\Produtos\Nfconsultar\NfCadastro;
use OmieLib\Produtos\Nfconsultar\NfChave;
use OmieLib\Produtos\Nfconsultar\NfDestInt;
use OmieLib\Produtos\Nfconsultar\NfEmitInt;
use OmieLib\Produtos\Nfconsultar\NfProdInt;
use OmieLib\Produtos\Nfconsultar\Pedido;
use OmieLib\Produtos\Nfconsultar\Prod;
use OmieLib\Produtos\Nfconsultar\Rastreabilidade;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\RetTrib;
use OmieLib\Produtos\Nfconsultar\Titulos;
use OmieLib\Produtos\Nfconsultar\Total;

/**
 * Resposta da listagem de Notas Fiscais
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element nfCadastroArray $nfCadastro Dados da Nota Fiscal&nbsp;
 * @pw_complex nfListarResponse
 */
class NfListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Dados da Nota Fiscal&nbsp;
	 *
	 * @var NfCadastro[]
	 */
	public array $nfCadastro;
}
