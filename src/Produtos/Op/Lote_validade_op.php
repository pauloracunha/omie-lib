<?php

namespace OmieLib\Produtos\Op;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Op\Request\CopAlterarRequest;
use OmieLib\Produtos\Op\Request\CopConcluirRequest;
use OmieLib\Produtos\Op\Request\CopConsultarRequest;
use OmieLib\Produtos\Op\Request\CopExcluirRequest;
use OmieLib\Produtos\Op\Request\CopIncluirRequest;
use OmieLib\Produtos\Op\Request\CopListarRequest;
use OmieLib\Produtos\Op\Request\CopReverterRequest;
use OmieLib\Produtos\Op\Request\CopUpsertRequest;
use OmieLib\Produtos\Op\Response\CopAlterarResponse;
use OmieLib\Produtos\Op\Response\CopConcluirResponse;
use OmieLib\Produtos\Op\Response\CopConsultarResponse;
use OmieLib\Produtos\Op\Response\CopExcluirResponse;
use OmieLib\Produtos\Op\Response\CopIncluirResponse;
use OmieLib\Produtos\Op\Response\CopListarResponse;
use OmieLib\Produtos\Op\Response\CopReverterResponse;
use OmieLib\Produtos\Op\Response\CopUpsertResponse;

/**
 * Informação do lote.
 *
 * @pw_element integer $nIdLote Código do lote.
 * @pw_complex lote_validade_op
 */
class Lote_validade_op{
	/**
	 * Código do lote.
	 *
	 * @var integer
	 */
	public int $nIdLote;
}
