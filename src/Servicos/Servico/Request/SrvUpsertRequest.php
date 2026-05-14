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
 * Requisição de upsert do cadastro do serviço.
 *
 * @pw_element intEditar $intEditar Dados da integração do serviço.
 * @pw_element cabecalho $cabecalho Dados do Serviço.
 * @pw_element descricao $descricao Descrição do Serviço.
 * @pw_element impostos $impostos Impostos e Retenções do serviço.
 * @pw_element viaUnica $viaUnica NF Via Única (Modelo 21 e 22)
 * @pw_complex srvUpsertRequest
 */
class SrvUpsertRequest{
	/**
	 * Dados da integração do serviço.
	 *
	 * @var IntEditar
	 */
	public IntEditar $intEditar;
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
	 * NF Via Única (Modelo 21 e 22)
	 *
	 * @var ViaUnica
	 */
	public ViaUnica $viaUnica;
}
