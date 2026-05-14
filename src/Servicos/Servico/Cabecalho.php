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
 * Dados do Serviço.
 *
 * @pw_element string $cDescricao Descrição Resumida do serviço prestado.
 * @pw_element string $cCodigo Código do Serviço.
 * @pw_element string $cIdTrib ID da Tributação dos Serviços.
 * @pw_element string $cCodServMun Código do Serviço Municipal.
 * @pw_element string $cCodLC116 Código do Serviço LC 116.
 * @pw_element string $nIdNBS Id do NBS.
 * @pw_element decimal $nPrecoUnit Preço Unitário do Serviço.
 * @pw_element string $cCodCateg Código da Categoria.
 * @pw_element string $cTipoDesc Tipo do desconto.<BR><BR>Pode ser:<BR>P - Percentual<BR>V - Valor<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.
 * @pw_element decimal $nValorDesc Valor do desconto.<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.<BR>
 * @pw_element decimal $nAliqDesc Percentual do desconto.<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.
 * @pw_complex cabecalho
 */
class Cabecalho{
	/**
	 * Descrição Resumida do serviço prestado.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Código do Serviço.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * ID da Tributação dos Serviços.
	 *
	 * @var string
	 */
	public string $cIdTrib;
	/**
	 * Código do Serviço Municipal.
	 *
	 * @var string
	 */
	public string $cCodServMun;
	/**
	 * Código do Serviço LC 116.
	 *
	 * @var string
	 */
	public string $cCodLC116;
	/**
	 * Id do NBS.
	 *
	 * @var string
	 */
	public string $nIdNBS;
	/**
	 * Preço Unitário do Serviço.
	 *
	 * @var decimal
	 */
	public float $nPrecoUnit;
	/**
	 * Código da Categoria.
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Tipo do desconto.<BR><BR>Pode ser:<BR>P - Percentual<BR>V - Valor<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.
	 *
	 * @var string
	 */
	public string $cTipoDesc;
	/**
	 * Valor do desconto.<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.<BR>
	 *
	 * @var decimal
	 */
	public float $nValorDesc;
	/**
	 * Percentual do desconto.<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.
	 *
	 * @var decimal
	 */
	public float $nAliqDesc;
}
