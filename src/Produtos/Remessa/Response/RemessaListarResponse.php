<?php

namespace OmieLib\Produtos\Remessa\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Agropecuario;
use OmieLib\Produtos\Remessa\CBS;
use OmieLib\Produtos\Remessa\COFINS;
use OmieLib\Produtos\Remessa\Cabec;
use OmieLib\Produtos\Remessa\Email;
use OmieLib\Produtos\Remessa\Frete;
use OmieLib\Produtos\Remessa\IBS;
use OmieLib\Produtos\Remessa\IBS_CBS;
use OmieLib\Produtos\Remessa\ICMS;
use OmieLib\Produtos\Remessa\ICMS_SN;
use OmieLib\Produtos\Remessa\ICMS_ST;
use OmieLib\Produtos\Remessa\IPI;
use OmieLib\Produtos\Remessa\InfAdic;
use OmieLib\Produtos\Remessa\InfAdicItem;
use OmieLib\Produtos\Remessa\Itens;
use OmieLib\Produtos\Remessa\ListaNfe;
use OmieLib\Produtos\Remessa\Lote_validade;
use OmieLib\Produtos\Remessa\Mensagens;
use OmieLib\Produtos\Remessa\NfRelacionada;
use OmieLib\Produtos\Remessa\NrCupomFiscal;
use OmieLib\Produtos\Remessa\NrModelo1_1A;
use OmieLib\Produtos\Remessa\NrNF;
use OmieLib\Produtos\Remessa\NrProdutorRural;
use OmieLib\Produtos\Remessa\Obs;
use OmieLib\Produtos\Remessa\Outros_detalhes;
use OmieLib\Produtos\Remessa\PIS;
use OmieLib\Produtos\Remessa\Produtos;
use OmieLib\Produtos\Remessa\Rastreabilidade;
use OmieLib\Produtos\Remessa\RemessaChave;
use OmieLib\Produtos\Remessa\RemessaProdutoJsonClient;
use OmieLib\Produtos\Remessa\RemessaStatus;
use OmieLib\Produtos\Remessa\Remessas;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\TRIB_REG;

/**
 * Resposta da solicitação de listagem de remessa.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotalPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados.
 * @pw_element integer $nTotalRegistros Total de registros encontrados.
 * @pw_element remessasArray $remessas Cadastro de Remessa&nbsp;
 * @pw_complex remessaListarResponse
 */
class RemessaListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotalPaginas;
	/**
	 * Número de registros retornados.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotalRegistros;
	/**
	 * Cadastro de Remessa&nbsp;
	 *
	 * @var Remessas[]
	 */
	public array $remessas;
}
