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
 * Resposta da requisição de consulta de serviços.
 *
 * @pw_element intListar $intListar Dados da integração do serviço.
 * @pw_element cabecalho $cabecalho Dados do Serviço.
 * @pw_element descricao $descricao Descrição do Serviço.
 * @pw_element impostos $impostos Impostos e Retenções do serviço.
 * @pw_element info $info Dados da registro.
 * @pw_element produtosUtilizados $produtosUtilizados Produtos Utilizados no serviço.
 * @pw_element viaUnica $viaUnica NF Via Única (Modelo 21 e 22)
 * @pw_complex srvConsultarResponse
 */
class SrvConsultarResponse{
	/**
	 * Dados da integração do serviço.
	 *
	 * @var IntListar
	 */
	public IntListar $intListar;
	/**
	 * Dados do Serviço.
	 *
	 * @var Cabecalho
	 */
	public Cabecalho $cabecalho;
	/**
	 * Descrição do Serviço.
	 *
	 * @var Descricao
	 */
	public Descricao $descricao;
	/**
	 * Impostos e Retenções do serviço.
	 *
	 * @var Impostos
	 */
	public Impostos $impostos;
	/**
	 * Dados da registro.
	 *
	 * @var Info
	 */
	public Info $info;
	/**
	 * Produtos Utilizados no serviço.
	 *
	 * @var ProdutosUtilizados
	 */
	public ProdutosUtilizados $produtosUtilizados;
	/**
	 * NF Via Única (Modelo 21 e 22)
	 *
	 * @var ViaUnica
	 */
	public ViaUnica $viaUnica;
}
