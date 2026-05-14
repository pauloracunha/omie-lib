<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Dados das parcelas
 *
 * @pw_element string $dVencimento Data de vencimento da parcela
 * @pw_element integer $nSequencia Número da Parcela
 * @pw_element decimal $vParcela Valor da parcela
 * @pw_element decimal $pParcela Percentual da parcela
 * @pw_complex parcelasListaEditar
 */
class ParcelasListaEditar{
	/**
	 * Data de vencimento da parcela
	 *
	 * @var string
	 */
	public string $dVencimento;
	/**
	 * Número da Parcela
	 *
	 * @var integer
	 */
	public int $nSequencia;
	/**
	 * Valor da parcela
	 *
	 * @var decimal
	 */
	public float $vParcela;
	/**
	 * Percentual da parcela
	 *
	 * @var decimal
	 */
	public float $pParcela;
}
