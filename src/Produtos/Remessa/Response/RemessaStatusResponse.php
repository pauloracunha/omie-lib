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
 * Resposta da solicitação de consulta do Status da Remessa.
 *
 * @pw_element integer $nCodRem Código da Remessa no Omie
 * @pw_element string $cCodIntRem Código de Integração da Remessa
 * @pw_element string $cNumeroRemessa Número da Remessa exibido na tela.
 * @pw_element string $cancelada NF-e Cancelada?
 * @pw_element string $faturada Nota Fiscal foi faturada.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $cAmbiente Ambiente da NF-e (Danfe)
 * @pw_element decimal $nValorTotal Valor total da remessa
 * @pw_element ListaNfeArray $ListaNfe Lista de NF-es geradas
 * @pw_complex remessaStatusResponse
 */
class RemessaStatusResponse{
	/**
	 * Código da Remessa no Omie
	 *
	 * @var integer
	 */
	public int $nCodRem;
	/**
	 * Código de Integração da Remessa
	 *
	 * @var string
	 */
	public string $cCodIntRem;
	/**
	 * Número da Remessa exibido na tela.
	 *
	 * @var string
	 */
	public string $cNumeroRemessa;
	/**
	 * NF-e Cancelada?
	 *
	 * @var string
	 */
	public string $cancelada;
	/**
	 * Nota Fiscal foi faturada.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $faturada;
	/**
	 * Ambiente da NF-e (Danfe)
	 *
	 * @var string
	 */
	public string $cAmbiente;
	/**
	 * Valor total da remessa
	 *
	 * @var decimal
	 */
	public float $nValorTotal;
	/**
	 * Lista de NF-es geradas
	 *
	 * @var ListaNfe[]
	 */
	public array $ListaNfe;
}
