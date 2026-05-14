<?php

namespace OmieLib\Servicos\Servico\Response;

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
use OmieLib\Servicos\Servico\Request\SrvAssociarRequest;
use OmieLib\Servicos\Servico\Request\SrvConsultarRequest;
use OmieLib\Servicos\Servico\Request\SrvEditarRequest;
use OmieLib\Servicos\Servico\Request\SrvExcluirRequest;
use OmieLib\Servicos\Servico\Request\SrvIncluirRequest;
use OmieLib\Servicos\Servico\Request\SrvListarRequest;
use OmieLib\Servicos\Servico\Request\SrvUpsertRequest;
use OmieLib\Servicos\Servico\ServicosJsonClient;
use OmieLib\Servicos\Servico\ViaUnica;

/**
 * Resposta da solicitação de exclusão do cadastro do serviço.
 *
 * @pw_element string $cCodIntServ Código de Integração do Serviço.<BR>(Utilizado em serviços criados via API, não é visualizado na tela)
 * @pw_element integer $nCodServ Código do serviço.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex srvExcluirResponse
 */
class SrvExcluirResponse{
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
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
