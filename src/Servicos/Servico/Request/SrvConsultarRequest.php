<?php

namespace OmieLib\Servicos\Servico\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Servico\Cabecalho;
use OmieLib\Servicos\Servico\Cadastros;
use OmieLib\Servicos\Servico\Descricao;
use OmieLib\Servicos\Servico\Impostos;
use OmieLib\Servicos\Servico\Info;
use OmieLib\Servicos\Servico\IntEditar;
use OmieLib\Servicos\Servico\IntIncluir;
use OmieLib\Servicos\Servico\IntListar;
use OmieLib\Servicos\Servico\ProdutoUtilizado;
use OmieLib\Servicos\Servico\ProdutosUtilizados;
use OmieLib\Servicos\Servico\Response\SrvAssociarResponse;
use OmieLib\Servicos\Servico\Response\SrvConsultarResponse;
use OmieLib\Servicos\Servico\Response\SrvEditarResponse;
use OmieLib\Servicos\Servico\Response\SrvExcluirResponse;
use OmieLib\Servicos\Servico\Response\SrvIncluirResponse;
use OmieLib\Servicos\Servico\Response\SrvListarResponse;
use OmieLib\Servicos\Servico\Response\SrvUpsertResponse;
use OmieLib\Servicos\Servico\ServicosJsonClient;
use OmieLib\Servicos\Servico\ViaUnica;

/**
 * Requisição da consulta do serviço.
 *
 * @pw_element string $cCodIntServ Código de Integração do Serviço.<BR>(Utilizado em serviços criados via API, não é visualizado na tela)
 * @pw_element integer $nCodServ Código do serviço.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_complex srvConsultarRequest
 */
class SrvConsultarRequest{
	/**
	 * Código de Integração do Serviço.<BR>(Utilizado em serviços criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntServ;
	/**
	 * Código do serviço.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodServ;
}
