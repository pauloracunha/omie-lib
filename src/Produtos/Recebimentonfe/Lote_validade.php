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
 * Informações referentes ao lote e validade do produto.
 *
 * @pw_element integer $nIdLote Id do lote do produto. (Opcional)<BR><BR>Se não informado iremos cadastrar um novo lote.
 * @pw_element decimal $nQtdLote Informe aqui a quantidade do lote para o produto.<BR><BR>Preenchimento obrigatório quando o produto possui controle de lote.
 * @pw_element string $cNumLote Número do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada, com isso, será criado um novo lote a partir do número informado.
 * @pw_element string $cCodAgreg Código de agregação do lote do produto. (Opcional)<BR><BR>
 * @pw_element string $dDataFab Data de fabricação do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.<BR><BR>Como default é utilizado a data atual.
 * @pw_element string $dDataVal Data de validade do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
 * @pw_complex lote_validade
 */
class Lote_validade{
	/**
	 * Id do lote do produto. (Opcional)<BR><BR>Se não informado iremos cadastrar um novo lote.
	 *
	 * @var integer
	 */
	public int $nIdLote;
	/**
	 * Informe aqui a quantidade do lote para o produto.<BR><BR>Preenchimento obrigatório quando o produto possui controle de lote.
	 *
	 * @var decimal
	 */
	public float $nQtdLote;
	/**
	 * Número do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada, com isso, será criado um novo lote a partir do número informado.
	 *
	 * @var string
	 */
	public string $cNumLote;
	/**
	 * Código de agregação do lote do produto. (Opcional)<BR><BR>
	 *
	 * @var string
	 */
	public string $cCodAgreg;
	/**
	 * Data de fabricação do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.<BR><BR>Como default é utilizado a data atual.
	 *
	 * @var string
	 */
	public string $dDataFab;
	/**
	 * Data de validade do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
	 *
	 * @var string
	 */
	public string $dDataVal;
}
