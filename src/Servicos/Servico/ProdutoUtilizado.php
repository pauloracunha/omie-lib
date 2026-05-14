<?php

namespace OmieLib\Servicos\Servico;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Servico\Request\SrvAssociarRequest;
use OmieLib\Servicos\Servico\Request\SrvConsultarRequest;
use OmieLib\Servicos\Servico\Request\SrvEditarRequest;
use OmieLib\Servicos\Servico\Request\SrvExcluirRequest;
use OmieLib\Servicos\Servico\Request\SrvIncluirRequest;
use OmieLib\Servicos\Servico\Request\SrvListarRequest;
use OmieLib\Servicos\Servico\Request\SrvUpsertRequest;
use OmieLib\Servicos\Servico\Response\SrvAssociarResponse;
use OmieLib\Servicos\Servico\Response\SrvConsultarResponse;
use OmieLib\Servicos\Servico\Response\SrvEditarResponse;
use OmieLib\Servicos\Servico\Response\SrvExcluirResponse;
use OmieLib\Servicos\Servico\Response\SrvIncluirResponse;
use OmieLib\Servicos\Servico\Response\SrvListarResponse;
use OmieLib\Servicos\Servico\Response\SrvUpsertResponse;

/**
 * rodutos utilizados no serviço.
 *
 * @pw_element integer $nIdItemPU (Código interno utilizado apenas na API). <BR>Não informar na inclusão.<BR><BR>Esse código não aparece na tela do Omie.
 * @pw_element string $cAcaoItemPU Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item na alteração.
 * @pw_element integer $nCodProdutoPU Código interno do produto.<BR>(utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.
 * @pw_element decimal $nQtdePU Quantidade.<BR>Preenchimento obrigatório
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR>Preenchimento opcional.
 * @pw_complex produtoUtilizado
 */
class ProdutoUtilizado{
	/**
	 * (Código interno utilizado apenas na API). <BR>Não informar na inclusão.<BR><BR>Esse código não aparece na tela do Omie.
	 *
	 * @var integer
	 */
	public int $nIdItemPU;
	/**
	 * Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item na alteração.
	 *
	 * @var string
	 */
	public string $cAcaoItemPU;
	/**
	 * Código interno do produto.<BR>(utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.
	 *
	 * @var integer
	 */
	public int $nCodProdutoPU;
	/**
	 * Quantidade.<BR>Preenchimento obrigatório
	 *
	 * @var decimal
	 */
	public float $nQtdePU;
	/**
	 * Código do Local do Estoque.<BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
}
