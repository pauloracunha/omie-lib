<?php

namespace OmieLib\Produtos\Remessa\Request;

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
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;
use OmieLib\Produtos\Remessa\TRIB_REG;

/**
 * Solicitação de listagem de remessa.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegistrosPorPagina Número de registros retornados.
 * @pw_element string $cOrdenarPor Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>INTEGRACAO - Código do lançamento interno do seu sistema;<BR>DATA_LANCAMENTO - Data do lançamento.
 * @pw_element string $dtAltDe Filtra os registros a partir da data.
 * @pw_element string $dtAltAte Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $hrAltDe Filtra os registros a partir da hora específicada.
 * @pw_element string $hrAltAte Filtra os registros até a hora específicada.
 * @pw_element integer $nIdCliente Filtra os registros do cliente específicado.
 * @pw_element string $cExibirDetalhes Exibir os detalhes da remessa.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $faturada Nota Fiscal foi faturada.<BR><BR>Preencher com "S" ou "N".
 * @pw_complex remessaListarRequest
 */
class RemessaListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados.
	 *
	 * @var integer
	 */
	public int $nRegistrosPorPagina;
	/**
	 * Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>INTEGRACAO - Código do lançamento interno do seu sistema;<BR>DATA_LANCAMENTO - Data do lançamento.
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Filtra os registros a partir da data.
	 *
	 * @var string
	 */
	public string $dtAltDe;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
	 *
	 * @var string
	 */
	public string $dtAltAte;
	/**
	 * Filtra os registros a partir da hora específicada.
	 *
	 * @var string
	 */
	public string $hrAltDe;
	/**
	 * Filtra os registros até a hora específicada.
	 *
	 * @var string
	 */
	public string $hrAltAte;
	/**
	 * Filtra os registros do cliente específicado.
	 *
	 * @var integer
	 */
	public int $nIdCliente;
	/**
	 * Exibir os detalhes da remessa.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $cExibirDetalhes;
	/**
	 * Nota Fiscal foi faturada.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $faturada;
}
