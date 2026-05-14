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
 * Solicitação de consulta do Status da Remessa.
 *
 * @pw_element integer $nCodRem Código da Remessa no Omie
 * @pw_element string $cCodIntRem Código de Integração da Remessa
 * @pw_complex remessaStatusRequest
 */
class RemessaStatusRequest{
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
}
