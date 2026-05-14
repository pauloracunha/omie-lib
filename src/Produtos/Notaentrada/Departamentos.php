<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Departamentos da Nota de Entrada
 *
 * @pw_element string $cCodDepto Código do Departamento - Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" da Nota de Entrada.<BR><BR>Utilize a tag "codigo" do método "ListarDepatartamentos" da API<BR>/api/v1/geral/departamentos/ para obter essa informação.
 * @pw_element decimal $nValor Valor do rateio - Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" da Nota de Entrada.
 * @pw_element decimal $nPerc Percentual do rateio - Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" da Nota de Entrada.
 * @pw_complex departamentos
 */
class Departamentos{
	/**
	 * Código do Departamento - Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" da Nota de Entrada.<BR><BR>Utilize a tag "codigo" do método "ListarDepatartamentos" da API<BR>/api/v1/geral/departamentos/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCodDepto;
	/**
	 * Valor do rateio - Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" da Nota de Entrada.
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * Percentual do rateio - Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" da Nota de Entrada.
	 *
	 * @var decimal
	 */
	public float $nPerc;
}
